<?php

namespace App\Http\Controllers;

use App\Models\Validacionproyecto;
use App\Models\Evaluarproyecto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

/**
 * Class ValidacionproyectoController
 * @package App\Http\Controllers
 */
class ValidacionproyectoController extends Controller
{
    // App\Models\ValidacionProyecto.php

    public function evaluarproyecto()
    {
        return $this->belongsTo(Evaluarproyecto::class, 'id_evaluacionproy', 'id_evaluarproy');
    }

    public function index()
    {
        $validacionproyectos = Validacionproyecto::paginate(10);

        return view('validacionproyecto.index', compact('validacionproyectos'))
            ->with('i', (request()->input('page', 1) - 1) * $validacionproyectos->perPage());
    }

    public function store(Request $request)
    {
        request()->validate(Validacionproyecto::$rules);

        $validacionproyecto = Validacionproyecto::create($request->all());

        return redirect()->route('validacionproyectos.index')
            ->with('success', 'Validacionproyecto created successfully.');
    }


    public function show($id)
    {
        $validacionproyecto = ValidacionProyecto::with('evaluarproyecto')->findOrFail($id);
        return view('validacionproyecto.show', compact('validacionproyecto'));
    }

    public function edit($id)
    {
        $validacionproyecto = Validacionproyecto::find($id);

        return view('validacionproyecto.edit', compact('validacionproyecto'));
    }

    public function create()
    {
        return view('validacionproyecto.create');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'documento_validacion' => 'required|file|mimes:pdf,doc,docx|max:10240',
        ]);

        $validacionProyecto = ValidacionProyecto::findOrFail($id);

        if ($request->hasFile('documento_validacion')) {
            // Eliminar el archivo anterior si existe
            if ($validacionProyecto->documento_validacion) {
                Storage::disk('public')->delete($validacionProyecto->documento_validacion);
            }

            $documentoValidacionPath = $request->file('documento_validacion')->store('documentos_validacion', 'public');
            $validacionProyecto->documento_validacion = $documentoValidacionPath;
        }

        $validacionProyecto->save();

        return redirect()->route('validacionproyecto.index')->with('success', 'Documento de validación actualizado correctamente.');
    }

    public function destroy($id)
    {
        $validacionproyecto = Validacionproyecto::find($id)->delete();

        return redirect()->route('validacionproyectos.index')
            ->with('success', 'Validacionproyecto deleted successfully');
    }
}
