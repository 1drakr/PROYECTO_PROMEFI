<?php

namespace App\Http\Controllers;

use App\Models\Colaborador;
use Illuminate\Http\Request;

/**
 * Class ColaboradorController
 * @package App\Http\Controllers
 */
class ColaboradorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $colaboradors = Colaborador::paginate(10);

        return view('colaborador.index', compact('colaboradors'))
            ->with('i', (request()->input('page', 1) - 1) * $colaboradors->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $colaborador = new Colaborador();
        return view('colaborador.create', compact('colaborador'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Colaborador::$rules);

        $colaborador = Colaborador::create($request->all());

        return redirect()->route('colaboradors.index')
            ->with('success', 'Colaborador created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $colaborador = Colaborador::find($id);

        return view('colaborador.show', compact('colaborador'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $colaborador = Colaborador::find($id);

        return view('colaborador.edit', compact('colaborador'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Colaborador $colaborador
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Colaborador $colaborador)
    {
        request()->validate(Colaborador::$rules);

        $colaborador->update($request->all());

        return redirect()->route('colaboradors.index')
            ->with('success', 'Colaborador updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $colaborador = Colaborador::find($id)->delete();

        return redirect()->route('colaboradors.index')
            ->with('success', 'Colaborador deleted successfully');
    }
}
