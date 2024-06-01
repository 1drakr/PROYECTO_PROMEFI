<?php

namespace App\Http\Controllers;

use App\Models\PagoPatrocinador;
use Illuminate\Http\Request;

/**
 * Class PagoPatrocinadorController
 * @package App\Http\Controllers
 */
class PagoPatrocinadorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pagoPatrocinadors = PagoPatrocinador::paginate(10);

        return view('pago-patrocinador.index', compact('pagoPatrocinadors'))
            ->with('i', (request()->input('page', 1) - 1) * $pagoPatrocinadors->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pagoPatrocinador = new PagoPatrocinador();
        return view('pago-patrocinador.create', compact('pagoPatrocinador'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(PagoPatrocinador::$rules);

        $pagoPatrocinador = PagoPatrocinador::create($request->all());

        return redirect()->route('pago-patrocinadors.index')
            ->with('success', 'PagoPatrocinador created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pagoPatrocinador = PagoPatrocinador::find($id);

        return view('pago-patrocinador.show', compact('pagoPatrocinador'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pagoPatrocinador = PagoPatrocinador::find($id);

        return view('pago-patrocinador.edit', compact('pagoPatrocinador'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  PagoPatrocinador $pagoPatrocinador
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PagoPatrocinador $pagoPatrocinador)
    {
        request()->validate(PagoPatrocinador::$rules);

        $pagoPatrocinador->update($request->all());

        return redirect()->route('pago-patrocinadors.index')
            ->with('success', 'PagoPatrocinador updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $pagoPatrocinador = PagoPatrocinador::find($id)->delete();

        return redirect()->route('pago-patrocinadors.index')
            ->with('success', 'PagoPatrocinador deleted successfully');
    }
}
