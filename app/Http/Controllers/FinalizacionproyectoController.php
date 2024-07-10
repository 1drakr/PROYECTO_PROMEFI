<?php

namespace App\Http\Controllers;

use App\Models\Finalizacionproyecto;
use App\Models\AmpliacionFecha;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class FinalizacionproyectoController extends Controller
{

    public function index()
    {
        $finalizacionproyectos = Finalizacionproyecto::paginate(10);

        return view('finalizacionproyecto.index', compact('finalizacionproyectos'))
            ->with('i', (request()->input('page', 1) - 1) * $finalizacionproyectos->perPage());
    }

    public function create()
    {
        $finalizacionproyecto = new Finalizacionproyecto();
        return view('finalizacionproyecto.create', compact('finalizacionproyecto'));
    }

    public function store(Request $request)
    {
        request()->validate(Finalizacionproyecto::$rules);

        $finalizacionproyecto = Finalizacionproyecto::create($request->all());

        return redirect()->route('finalizacionproyectos.index')
            ->with('success', 'Finalizacionproyecto created successfully.');
    }
    public function show($id)
    {
        $finalizacionproyecto = Finalizacionproyecto::find($id);

        return view('finalizacionproyecto.show', compact('finalizacionproyecto'));
    }

    public function edit($id)
    {
        $finalizacionproyecto = Finalizacionproyecto::find($id);

        return view('finalizacionproyecto.edit', compact('finalizacionproyecto'));
    }

    public function update(Request $request, Finalizacionproyecto $finalizacionproyecto)
    {
        request()->validate(Finalizacionproyecto::$rules);

        $finalizacionproyecto->update($request->all());

        return redirect()->route('finalizacionproyectos.index')
            ->with('success', 'Finalizacionproyecto updated successfully');
    }

    public function apelacion($id)
    {
        $finalizacionproyecto = Finalizacionproyecto::findOrFail($id);
        return view('finalizacionproyecto.apelacion', compact('finalizacionproyecto'));
    }

    public function storeApelacion(Request $request, $id)
    {
        $request->validate([
            'justificacion' => 'required|string',
            'documento_justificacion' => 'nullable|file|mimes:pdf,doc,docx|max:10240',
            'nueva_fecha_limite' => 'required|date|after:today'
        ]);

        $finalizacionproyecto = Finalizacionproyecto::findOrFail($id);
        $data = $request->all();
        $data['id_proyecto'] = $finalizacionproyecto->id_proyecto;
        $data['id_perfil'] = Auth::user()->perfil->id_perfil;

        if ($request->hasFile('documento_justificacion')) {
            $data['documento_justificacion'] = $request->file('documento_justificacion')->store('documentos_justificacion', 'public');
        }

        AmpliacionFecha::create($data);

        return redirect()->route('finalizacionproyecto.index')->with('success', 'Solicitud de ampliación de fecha enviada correctamente.');
    }

    public function destroy($id)
    {
        $finalizacionproyecto = Finalizacionproyecto::find($id)->delete();

        return redirect()->route('finalizacionproyecto.index')
            ->with('success', 'Finalizacionproyecto deleted successfully');
    }
}
