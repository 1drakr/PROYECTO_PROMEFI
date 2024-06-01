<?php

namespace App\Http\Controllers;

use App\Models\PagoCreador;
use Illuminate\Http\Request;

/**
 * Class PagoCreadorController
 * @package App\Http\Controllers
 */
class PagoCreadorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pagoCreadors = PagoCreador::paginate(10);

        return view('pago-creador.index', compact('pagoCreadors'))
            ->with('i', (request()->input('page', 1) - 1) * $pagoCreadors->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pagoCreador = new PagoCreador();
        return view('pago-creador.create', compact('pagoCreador'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(PagoCreador::$rules);

        $pagoCreador = PagoCreador::create($request->all());

        return redirect()->route('pago-creadors.index')
            ->with('success', 'PagoCreador created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pagoCreador = PagoCreador::find($id);

        return view('pago-creador.show', compact('pagoCreador'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pagoCreador = PagoCreador::find($id);

        return view('pago-creador.edit', compact('pagoCreador'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  PagoCreador $pagoCreador
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PagoCreador $pagoCreador)
    {
        request()->validate(PagoCreador::$rules);

        $pagoCreador->update($request->all());

        return redirect()->route('pago-creadors.index')
            ->with('success', 'PagoCreador updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $pagoCreador = PagoCreador::find($id)->delete();

        return redirect()->route('pago-creadors.index')
            ->with('success', 'PagoCreador deleted successfully');
    }
}
