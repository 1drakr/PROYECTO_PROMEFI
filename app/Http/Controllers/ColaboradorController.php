<?php

namespace App\Http\Controllers;

use App\Models\Colaborador;
use Illuminate\Http\Request;

class ColaboradorController extends Controller
{

    public function index()
    {
        $colaboradors = Colaborador::paginate(10);

        return view('colaborador.index', compact('colaboradors'))
            ->with('i', (request()->input('page', 1) - 1) * $colaboradors->perPage());
    }

    public function create()
    {
        $colaborador = new Colaborador();
        return view('colaborador.create', compact('colaborador'));
    }

    public function store(Request $request)
    {
        request()->validate(Colaborador::$rules);

        $colaborador = Colaborador::create($request->all());

        return redirect()->route('colaboradors.index')
            ->with('success', 'Colaborador created successfully.');
    }

    public function show($id)
    {
        $colaborador = Colaborador::find($id);

        return view('colaborador.show', compact('colaborador'));
    }

    public function edit($id)
    {
        $colaborador = Colaborador::find($id);

        return view('colaborador.edit', compact('colaborador'));
    }

    public function update(Request $request, Colaborador $colaborador)
    {
        request()->validate(Colaborador::$rules);

        $colaborador->update($request->all());

        return redirect()->route('colaboradors.index')
            ->with('success', 'Colaborador updated successfully');
    }

    public function destroy($id)
    {
        $colaborador = Colaborador::find($id)->delete();

        return redirect()->route('colaboradors.index')
            ->with('success', 'Colaborador deleted successfully');
    }
}
