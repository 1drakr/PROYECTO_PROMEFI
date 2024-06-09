<?php

namespace App\Http\Controllers;

use App\Models\Pago;
use Illuminate\Http\Request;

class PagoController extends Controller
{
    public function index()
    {
        $pagos = Pago::paginate(10);

        return view('pago.index', compact('pagos'))
            ->with('i', (request()->input('page', 1) - 1) * $pagos->perPage());
    }
    public function create()
    {
        $pago = new Pago();
        return view('pago.create', compact('pago'));
    }

    public function store(Request $request)
    {
        request()->validate(Pago::$rules);

        $pago = Pago::create($request->all());

        return redirect()->route('pagos.index')
            ->with('success', 'Pago created successfully.');
    }

    public function show($id)
    {
        $pago = Pago::find($id);

        return view('pago.show', compact('pago'));
    }

    public function edit($id)
    {
        $pago = Pago::find($id);

        return view('pago.edit', compact('pago'));
    }

    public function update(Request $request, Pago $pago)
    {
        request()->validate(Pago::$rules);

        $pago->update($request->all());

        return redirect()->route('pagos.index')
            ->with('success', 'Pago updated successfully');
    }

    public function destroy($id)
    {
        $pago = Pago::find($id)->delete();

        return redirect()->route('pagos.index')
            ->with('success', 'Pago deleted successfully');
    }
}
