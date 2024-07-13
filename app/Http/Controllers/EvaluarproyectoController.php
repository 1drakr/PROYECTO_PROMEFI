<?php

namespace App\Http\Controllers;

use App\Models\Evaluarproyecto;
use App\Models\Proyecto;
use App\Models\Score;
use App\Models\Solicitudproyecto;
use App\Models\Validacionproyecto;
use App\Charts\ScoreChart;  // Si estás usando una librería de gráficos



use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Barryvdh\DomPDF\Facade\Pdf as PDF;
use Illuminate\Support\Facades\Auth;

class EvaluarproyectoController extends Controller
{
    public function index(Request $request)
    {
        $user = Auth::user();
        $perfil = $user->perfil;

        if ($perfil->rol->Nombre === 'Administrador') {
            // Los administradores pueden ver todos los proyectos evaluados
            $evaluarproyectos = Evaluarproyecto::paginate(10);
        } else {
            // Otros usuarios solo pueden ver sus propios proyectos evaluados
            $evaluarproyectos = Evaluarproyecto::where('id_evauser', $perfil->id_perfil)->paginate(10);
        }

        return view('evaluarproyecto.index', compact('evaluarproyectos'))
            ->with('i', (request()->input('page', 1) - 1) * $evaluarproyectos->perPage());
    }

    public function create(Request $request)
    {
        $solicitud = Solicitudproyecto::with([
            'proyecto.perfil.user',
            'proyecto.estado',
            'proyecto.historia',
        ])->findOrFail($request->input('solicitud_id'));

        $score = Score::where('id_proyecto', $solicitud->proyecto->id_proyecto)->first();


        // Buscar un evaluarproyecto existente o crear uno nuevo
        $evaluarproyecto = Evaluarproyecto::where('id_solicitud', $solicitud->id_solicitudProy)->first() ?? new Evaluarproyecto(['id_solicitud' => $solicitud->id_solicitudProy]);

        $pdf = PDF::loadView('evaluarproyecto.project_document', compact('solicitud','score'));
        $pdfPath = 'public/project_document.pdf';  // Cambia esto para guardar en la ubicación correcta
        $pdf->save(storage_path('app/' . $pdfPath));  // Guarda el PDF en la ubicación correcta

        return view('evaluarproyecto.create', compact('evaluarproyecto', 'pdfPath'));
    }


    public function edit($id)
    {
        $evaluarproyecto = Evaluarproyecto::findOrFail($id);

        return view('evaluarproyecto.edit', compact('evaluarproyecto'));
    }

    public function update(Request $request, $id)
    {
        request()->validate([
            'documento_proyecto' => 'file|mimes:pdf,doc,docx|max:10240',
            'documento_evaluacion' => 'file|mimes:pdf,doc,docx|max:10240',
            'documento_validacion' => 'file|mimes:pdf,doc,docx|max:10240',
        ]);


        $evaluarproyecto = Evaluarproyecto::findOrFail($id);
        $solicitudproyecto = Solicitudproyecto::findOrFail($evaluarproyecto->id_solicitud);

        // Asignar automáticamente id_perfil e id_estado
        $user = auth()->user();
        $perfil = $user->perfil;


        if (!$perfil) {
            // Si no se encuentra el perfil, registrar un error
            Log::error('No se pudo encontrar el perfil del usuario.', ['user_id' => $user->id]);
            return redirect()->route('evaluarproyecto.index')
                ->with('error', 'No se pudo encontrar el perfil del usuario.');
        }

        $id_perfil = $perfil->id_perfil;

        if ($request->hasFile('documento_proyecto')) {
            $documentoProyectoPath = $request->file('documento_proyecto')->store('documentos_proyecto', 'public');
            $evaluarproyecto->documento_proyecto = $documentoProyectoPath;
        }

        if ($request->hasFile('documento_evaluacion')) {
            $documentoEvaluacionPath = $request->file('documento_evaluacion')->store('documentos_evaluacion', 'public');
            $evaluarproyecto->documento_evaluacion = $documentoEvaluacionPath;
        }

        $evaluarproyecto->update($request->except(['documento_proyecto', 'documento_evaluacion', 'documento_validacion']));

        // Verificar si ya existe una entrada en ValidacionProyecto con el mismo id_evaluacionproy
        $validacionProyecto = Validacionproyecto::where('id_evaluacionproy', $evaluarproyecto->id_evaluarproy)->first();

        if ($validacionProyecto) {
            // Si existe, actualizar la entrada existente
            $validacionProyecto->id_perfil = $id_perfil;
            $validacionProyecto->id_estado = $request->input('id_estado');
            $validacionProyecto->documento_validacion = null;
            $validacionProyecto->save();
        } else {
            // Si no existe, crear una nueva entrada
            $validacionProyecto = new ValidacionProyecto();
            $validacionProyecto->id_evaluacionproy = $evaluarproyecto->id_evaluarproy;
            $validacionProyecto->id_perfil = $id_perfil;
            $validacionProyecto->id_estado = $request->input('id_estado');
            $validacionProyecto->documento_validacion = null;
            $validacionProyecto->save();
        }

        return redirect()->route('evaluarproyecto.index')
            ->with('success', 'La Evaluacion se envio a Validacion');
    }


    public function destroy($id)
    {
        $evaluarproyecto = Evaluarproyecto::find($id)->delete();

        return redirect()->route('evaluarproyecto.index')
            ->with('success', 'Evaluarproyecto deleted successfully');
    }

    public function show($id)
    {
        $evaluarproyecto = Evaluarproyecto::with([
            'solicitud.proyecto.perfil.user',
            'solicitud.proyecto.estado',
            'solicitud.proyecto.historia',
            'estado'
        ])->findOrFail($id);

        return view('evaluarproyecto.show', compact('evaluarproyecto'));
    }

    public function downloadProjectDocument($id)
    {
        $evaluarproyecto = Evaluarproyecto::with([
            'solicitud.proyecto.perfil.user',
            'solicitud.proyecto.estado',
            'solicitud.proyecto.historia',
            'estado'
        ])->findOrFail($id);

        $pdf = PDF::loadView('evaluarproyecto.project_document', compact('evaluarproyecto'));

        return $pdf->download('project_document.pdf');
    }

    public function evaluate($id)
    {
        $evaluarproyecto = Evaluarproyecto::findOrFail($id);
        return view('evaluarproyecto.evaluation_form', compact('evaluarproyecto'));
    }

    public function storeEvaluation(Request $request, $id)
    {
        $request->validate([
            'comentarios' => 'required|string',
            'puntuacion' => 'required|numeric|min:1|max:10',
            'documento_evaluacion' => 'required|file|mimes:pdf,doc,docx',
        ]);

        $evaluarproyecto = Evaluarproyecto::findOrFail($id);

        if ($request->hasFile('documento_evaluacion')) {
            $evaluarproyecto->documento_evaluacion = file_get_contents($request->file('documento_evaluacion')->getRealPath());
        }

        $evaluarproyecto->comentarios = $request->input('comentarios');
        $evaluarproyecto->puntuacion = $request->input('puntuacion');
        $evaluarproyecto->id_estado = $request->input('id_estado');
        $evaluarproyecto->save();

        // Actualizar el estado del proyecto
        $proyecto = Proyecto::findOrFail($evaluarproyecto->id_proyecto);
        $proyecto->id_estado = $request->input('id_estado');
        dd($proyecto);
        $proyecto->save();

        return redirect()->route('evaluarproyecto.show', $id)->with('success', 'Evaluación enviada correctamente');
    }
    public function search(Request $request)
    {
        $query = $request->input('query');

        if ($query) {
            $evaluarproyectos = Evaluarproyecto::where('id_evaluarproy', 'LIKE', "%{$query}%")
                ->orWhere('id_solicitud', 'LIKE', "%{$query}%")
                ->orWhere('documento_proyecto', 'LIKE', "%{$query}%")
                ->orWhere('documento_evaluacion', 'LIKE', "%{$query}%")
                ->orWhere('id_estado', 'LIKE', "%{$query}%")
                ->get();
        } else {
            $evaluarproyectos = Evaluarproyecto::all();
        }

        $i = 0;

        return view('evaluarproyecto.partials.table_rows', compact('evaluarproyectos', 'i'));
    }
}
