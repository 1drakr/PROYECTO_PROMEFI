<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use Illuminate\Http\Request;

/**
 * Class PersonaController
 * @package App\Http\Controllers
 */
class PersonaController extends Controller
{
    public function index()
    {
        $personas = Persona::paginate(10);

        return view('persona.index', compact('personas'))
            ->with('i', (request()->input('page', 1) - 1) * $personas->perPage());
    }

    public function create()
    {
        $persona = new Persona();
        return view('persona.create', compact('persona'));
    }

    public function store(Request $request)
    {
        request()->validate(Persona::$rules);

        $persona = Persona::create($request->all());

        return redirect()->route('personas.index')
            ->with('success', 'Persona created successfully.');
    }

    public function show($id)
    {
        $persona = Persona::find($id);

        return view('persona.show', compact('persona'));
    }

    public function edit($id)
    {
        $persona = Persona::find($id);

        return view('persona.edit', compact('persona'));
    }

    public function update(Request $request, Persona $persona)
    {
        request()->validate(Persona::$rules);

        $persona->update($request->all());

        return redirect()->route('personas.index')
            ->with('success', 'Persona updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $persona = Persona::find($id)->delete();

        return redirect()->route('personas.index')
            ->with('success', 'Persona deleted successfully');
    }
}
