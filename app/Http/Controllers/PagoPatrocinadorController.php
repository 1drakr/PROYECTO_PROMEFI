<?php

namespace App\Http\Controllers;

use App\Models\PagoPatrocinador;
use Illuminate\Http\Request;

class PagoPatrocinadorController extends Controller
{
    public function index()
    {
        $pagoPatrocinadors = PagoPatrocinador::paginate(10);

        return view('pago-patrocinador.index', compact('pagoPatrocinadors'))
            ->with('i', (request()->input('page', 1) - 1) * $pagoPatrocinadors->perPage());
    }

    public function create()
    {
        $pagoPatrocinador = new PagoPatrocinador();
        return view('pago-patrocinador.create', compact('pagoPatrocinador'));
    }

    public function store(Request $request)
    {
        request()->validate(PagoPatrocinador::$rules);

        $pagoPatrocinador = PagoPatrocinador::create($request->all());

        return redirect()->route('pago-patrocinadors.index')
            ->with('success', 'PagoPatrocinador created successfully.');
    }

    public function show($id)
    {
        $pagoPatrocinador = PagoPatrocinador::find($id);

        return view('pago-patrocinador.show', compact('pagoPatrocinador'));
    }

    public function edit($id)
    {
        $pagoPatrocinador = PagoPatrocinador::find($id);

        return view('pago-patrocinador.edit', compact('pagoPatrocinador'));
    }

    public function update(Request $request, PagoPatrocinador $pagoPatrocinador)
    {
        request()->validate(PagoPatrocinador::$rules);

        $pagoPatrocinador->update($request->all());

        return redirect()->route('pago-patrocinadors.index')
            ->with('success', 'PagoPatrocinador updated successfully');
    }

    public function destroy($id)
    {
        $pagoPatrocinador = PagoPatrocinador::find($id)->delete();

        return redirect()->route('pago-patrocinadors.index')
            ->with('success', 'PagoPatrocinador deleted successfully');
    }
}
