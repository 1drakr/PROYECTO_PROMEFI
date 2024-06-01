<?php

namespace App\Http\Controllers;

use App\Models\Finalizacionproyecto;
use Illuminate\Http\Request;

/**
 * Class FinalizacionproyectoController
 * @package App\Http\Controllers
 */
class FinalizacionproyectoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $finalizacionproyectos = Finalizacionproyecto::paginate(10);

        return view('finalizacionproyecto.index', compact('finalizacionproyectos'))
            ->with('i', (request()->input('page', 1) - 1) * $finalizacionproyectos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $finalizacionproyecto = new Finalizacionproyecto();
        return view('finalizacionproyecto.create', compact('finalizacionproyecto'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Finalizacionproyecto::$rules);

        $finalizacionproyecto = Finalizacionproyecto::create($request->all());

        return redirect()->route('finalizacionproyectos.index')
            ->with('success', 'Finalizacionproyecto created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $finalizacionproyecto = Finalizacionproyecto::find($id);

        return view('finalizacionproyecto.show', compact('finalizacionproyecto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $finalizacionproyecto = Finalizacionproyecto::find($id);

        return view('finalizacionproyecto.edit', compact('finalizacionproyecto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Finalizacionproyecto $finalizacionproyecto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Finalizacionproyecto $finalizacionproyecto)
    {
        request()->validate(Finalizacionproyecto::$rules);

        $finalizacionproyecto->update($request->all());

        return redirect()->route('finalizacionproyectos.index')
            ->with('success', 'Finalizacionproyecto updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $finalizacionproyecto = Finalizacionproyecto::find($id)->delete();

        return redirect()->route('finalizacionproyectos.index')
            ->with('success', 'Finalizacionproyecto deleted successfully');
    }
}
