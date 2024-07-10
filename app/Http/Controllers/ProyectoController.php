<?php

namespace App\Http\Controllers;

use App\Models\Proyecto;
use App\Models\Estado;
use App\Models\Solicitudproyecto;
use Illuminate\Http\Request;
use App\Models\Historia;
use App\Models\Recompensa;
use App\Models\Perfil;
use App\Models\Finalizacionproyecto;

class ProyectoController extends Controller
{

    public function index()
    {
        $user = auth()->user();
        $perfil = $user->perfil;

        if ($perfil->rol->Nombre === 'Administrador') {
            // Los administradores pueden ver todos los proyectos
            $proyectos = Proyecto::with(['recompensas', 'historias', 'perfil.user', 'estado'])->paginate(10);
        } else {
            // Otros usuarios solo pueden ver sus propios proyectos
            $proyectos = Proyecto::whereHas('perfil', function($query) use ($user) {
                $query->where('id_users', $user->id);
            })->with(['recompensas', 'historias', 'perfil.user', 'estado'])->paginate(10);
        }

        return view('proyecto.index', compact('proyectos'))
            ->with('i', (request()->input('page', 1) - 1) * $proyectos->perPage());
    }

    public function create()
    {
        $proyecto = new Proyecto();
        $estados = Estado::pluck('nombre_estado', 'id_estado');
        return view('proyecto.create', compact('proyecto','estados'));
    }


    public function store(Request $request)
    {

        //request()->validate(Proyecto::$rules);
        $perfil = Perfil::where('id_users', auth()->user()->id)->first();
        // dd($request );
        $proyecto=Proyecto::create([
            'titulo' => $request->titulo,
            'subtitulo' => $request->subtitulo,
            'categoria_principal' => $request->categoria_principal,
            'categoria' => $request->categoria,
            'subcategoria' => $request->subcategoria,
            'ubicacion' => $request->ubicacion,
            'imagen' => "null",
            'video' => "null",
            'fecha_limite' => $request->fecha_limite,
            'duracion_campaña' => $request->duracion_campaña,
            'monto_meta' => $request->monto_meta,
            'riesgos_desafios' => $request->riesgos_desafios,
            'uso_ia' => 0,
            'pago' => 0,
            'tipo_proyecto' => $request->tipo_proyecto,
            'id_estado' => 6,
            'completado' => 0,
            'id_perfil' => $perfil->id_perfil,
        ]);

        // Insertar historia
        Historia::create([
            'id_proyecto' => $proyecto->id_proyecto,
            'titulo' => $request->historia_titulo,
            'texto' => $request->historia_texto,
            'video' =>"null",
            'imagen' => "null",
        ]);

        // Insertar recompensa
        Recompensa::create([
            'id_proyecto' => $proyecto->id_proyecto,
            'titulo' => $request->recompensa_titulo,
            'monto' => $request->recompensa_monto ? $request->recompensa_monto : 0.0,
            'imagen' => "null",
            'descripcion' => $request->recompensa_descripcion,
            'complemento' => 0,
            'patrocinadores' => 0,
            'envio' => $request->recompensa_envio,
            'fecha_entrega' => $request->recompensa_fecha_entrega,
            'cantidad' => $request->recompensa_cantidad,
            'tiempo_oferta' => $request->recompensa_tiempo_oferta,
        ]);

        // Crear una entrada en la tabla solicitudproyecto
        Solicitudproyecto::create([
            'id_proyecto' => $proyecto->id_proyecto,
            'id_usuario' => auth()->user()->id,
            'fecha_registro' =>now()->format('Y-m-d'),
            'id_estado' => 1, // Asumiendo que "Solicitar Creacion" tiene id 1 en la tabla estado
        ]);

        return redirect()->route('proyecto.index')
            ->with('success', 'Proyecto created successfully.');

    }


    public function show($id)
    {
        $proyecto = Proyecto::find($id);

        return view('proyecto.show', compact('proyecto'));
    }

    public function edit($id)
    {
        $proyecto = Proyecto::find($id);

        return view('proyecto.edit', compact('proyecto'));
    }

    public function update(Request $request, Proyecto $proyecto)
    {
        request()->validate(Proyecto::$rules);

        $proyecto->update($request->all());

        return redirect()->route('proyectos.index')
            ->with('success', 'Proyecto updated successfully');
    }

    public function finalizar($id)
    {
        $proyecto = Proyecto::findOrFail($id);

        // Verificar si el proyecto ya está finalizado
        if ($proyecto->id_estado == 5 or $proyecto->id_estado == 4) {
            return redirect()->route('proyecto.index')->with('error', 'El proyecto ya está finalizado.');
        }
        $proyecto->completado = 0;
        $proyecto->save();

        if ($proyecto->monto_meta <= $proyecto->recaudado) {
            $proyecto->id_estado = 4;
        }
        // Obtener el evaluador asignado desde la evaluación del proyecto
        $evaluarProyecto = $proyecto->solicitudproyectos->flatMap(function ($solicitud) {
            return $solicitud->evaluarproyectos;
        })->first();

        $idPerfilEvaluador = $evaluarProyecto ? $evaluarProyecto->id_evauser : null;

        Finalizacionproyecto::create([
            'id_proyecto' => $proyecto->id_proyecto,
            'id_perfil' => $idPerfilEvaluador,
            'documento_recompensa' => '' // Dejar vacío en lugar de null
        ]);
        return redirect()->route('proyecto.index')
            ->with('success', 'Proyecto created successfully.');
    }

    public function destroy($id)
    {
        $proyecto = Proyecto::find($id)->delete();

        return redirect()->route('proyectos.index')
            ->with('success', 'Proyecto deleted successfully');
    }
}
