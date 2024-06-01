<?php

namespace App\Http\Controllers;

use App\Models\Preguntafrecuente;
use Illuminate\Http\Request;

/**
 * Class PreguntafrecuenteController
 * @package App\Http\Controllers
 */
class PreguntafrecuenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $preguntafrecuentes = Preguntafrecuente::paginate(10);

        return view('preguntafrecuente.index', compact('preguntafrecuentes'))
            ->with('i', (request()->input('page', 1) - 1) * $preguntafrecuentes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $preguntafrecuente = new Preguntafrecuente();
        return view('preguntafrecuente.create', compact('preguntafrecuente'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Preguntafrecuente::$rules);

        $preguntafrecuente = Preguntafrecuente::create($request->all());

        return redirect()->route('preguntafrecuentes.index')
            ->with('success', 'Preguntafrecuente created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $preguntafrecuente = Preguntafrecuente::find($id);

        return view('preguntafrecuente.show', compact('preguntafrecuente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $preguntafrecuente = Preguntafrecuente::find($id);

        return view('preguntafrecuente.edit', compact('preguntafrecuente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Preguntafrecuente $preguntafrecuente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Preguntafrecuente $preguntafrecuente)
    {
        request()->validate(Preguntafrecuente::$rules);

        $preguntafrecuente->update($request->all());

        return redirect()->route('preguntafrecuentes.index')
            ->with('success', 'Preguntafrecuente updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $preguntafrecuente = Preguntafrecuente::find($id)->delete();

        return redirect()->route('preguntafrecuentes.index')
            ->with('success', 'Preguntafrecuente deleted successfully');
    }
}
