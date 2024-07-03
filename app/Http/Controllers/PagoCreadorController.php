<?php

namespace App\Http\Controllers;

use App\Models\PagoCreador;
use Illuminate\Http\Request;

class PagoCreadorController extends Controller
{
    public function index()
    {
        $pagoCreadors = PagoCreador::paginate(10);

        return view('pago-creador.index', compact('pagoCreadors'))
            ->with('i', (request()->input('page', 1) - 1) * $pagoCreadors->perPage());
    }

    public function create()
    {
        $pagoCreador = new PagoCreador();
        return view('pago-creador.create', compact('pagoCreador'));
    }

    public function store(Request $request)
    {
        request()->validate(PagoCreador::$rules);

        $pagoCreador = PagoCreador::create($request->all());

        return redirect()->route('pago-creadors.index')
            ->with('success', 'PagoCreador created successfully.');
    }

    public function show($id)
    {
        $pagoCreador = PagoCreador::find($id);

        return view('pago-creador.show', compact('pagoCreador'));
    }

    public function edit($id)
    {
        $pagoCreador = PagoCreador::find($id);

        return view('pago-creador.edit', compact('pagoCreador'));
    }

    public function update(Request $request, PagoCreador $pagoCreador)
    {
        request()->validate(PagoCreador::$rules);

        $pagoCreador->update($request->all());

        return redirect()->route('pago-creadors.index')
            ->with('success', 'PagoCreador updated successfully');
    }

    public function destroy($id)
    {
        $pagoCreador = PagoCreador::find($id)->delete();

        return redirect()->route('pago-creadors.index')
            ->with('success', 'PagoCreador deleted successfully');
    }
}
