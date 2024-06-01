<?php

namespace App\Http\Controllers;

use App\Models\Solicitudproyecto;
use Illuminate\Http\Request;
use App\Models\Perfil;
use App\Models\Evaluarproyecto;


/**
 * Class SolicitudproyectoController
 * @package App\Http\Controllers
 */
class SolicitudproyectoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $solicitudproyectos = Solicitudproyecto::with(['proyecto.recompensas', 'proyecto.perfil','user','estado'])->paginate(10);
        //dd($solicitudproyectos);;

        return view('solicitudproyecto.index', compact('solicitudproyectos'))
            ->with('i', (request()->input('page', 1) - 1) * $solicitudproyectos->perPage());
    }

    public function create()
    {
        $solicitudproyecto = new Solicitudproyecto();
        return view('solicitudproyecto.create', compact('solicitudproyecto'));
    }

    public function store(Request $request)
    {
        request()->validate(Solicitudproyecto::$rules);

        $solicitudproyecto = Solicitudproyecto::create($request->all());

        return redirect()->route('solicitudproyecto.index')
            ->with('success', 'Solicitudproyecto created successfully.');
    }

    public function show($id)
    {
        $solicitudproyecto = Solicitudproyecto::with(['proyecto.recompensas', 'proyecto.perfil','user','estado'])->find($id);
        //dd($solicitudproyecto);
        return view('solicitudproyecto.show', compact('solicitudproyecto'));
    }

    public function evaluar($id)
    {
        $solicitudproyecto = Solicitudproyecto::with(['proyecto.recompensas', 'proyecto.perfil','user','estado'])->find($id);
        $usuariosEvaluadores = Perfil::whereHas('rol', function ($query) {
            $query->where('nombre', 'evaluador');
        })->get();
        //dd($usuariosEvaluadores);
        return view('solicitudproyecto.evaluar', compact('solicitudproyecto', 'usuariosEvaluadores'));
    }


    public function storeEvaluacion(Request $request)
    {
        $request->validate([
            'id_solicitudProy' => 'required|exists:solicitudproyecto,id_solicitudProy',
            'id_perfil' => 'required|exists:perfil,id_perfil',
        ]);
        //dd($request);
        Evaluarproyecto::create([
            'id_solicitud' => $request->id_solicitudProy,
            'id_evauser' => $request->id_perfil,
            'documento_proyecto' => "null",
            'documento_evaluacion' => "null",
            'id_estado' => 2,
        ]);

        return redirect()->route('solicitudproyecto.index')->with('success', 'Evaluador asignado correctamente');
    }

    public function edit($id)
    {
        $solicitudproyecto = Solicitudproyecto::find($id);

        return view('solicitudproyecto.edit', compact('solicitudproyecto'));
    }

    public function update(Request $request, Solicitudproyecto $solicitudproyecto)
    {
        request()->validate(Solicitudproyecto::$rules);

        $solicitudproyecto->update($request->all());

        return redirect()->route('solicitudproyectos.index')
            ->with('success', 'Solicitudproyecto updated successfully');
    }

    public function destroy($id)
    {
        $solicitudproyecto = Solicitudproyecto::find($id)->delete();

        return redirect()->route('solicitudproyectos.index')
            ->with('success', 'Solicitudproyecto deleted successfully');
    }
}
