<?php

namespace App\Http\Controllers;

use App\Models\Pago;
use App\Models\PagoCreador;
use App\Models\PagoPatrocinador;
use App\Models\Proyecto;
use App\Models\Recompensa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PagoController extends Controller
{
    public function index()
    {
        $pagos = Pago::paginate(10);

        return view('pago.index', compact('pagos'))
            ->with('i', (request()->input('page', 1) - 1) * $pagos->perPage());
    }
    public function create(Request $request)
    {
        $pagos = new Pago();
        $proyectoId = $request->input('proyecto_id');
        $proyecto = Proyecto::findOrFail($proyectoId);
        //$recompensas = Recompensa::where('id_proyecto', $proyectoId)->first();
        $recompensas = Recompensa::where('id_proyecto', $proyectoId)->get();

        return view('pago.create', compact('pagos','proyecto', 'recompensas'));
    }

    public function store(Request $request)
    {
        $perfil = Auth::user()->perfil;
        $recompensa = Recompensa::find($request->id_recompensa);

        if ($recompensa->cantidad > 0) {
            $recompensa->cantidad -= 1;
            $recompensa->save();

            $pago = Pago::create([
                'id_proyecto' => $request->id_proyecto,
                    'id_perfil' => $perfil->id_perfil,
                    'nombre_legal' => $request->nombre_legal,
                    'id_fiscal' => $request->id_fiscal,
                    'nombre_empresa' => $request->nombre_empresa,
                    'direccion_comercio' => $request->direccion_comercio,
                    'telefono' => $request->telefono,
                    'metodo_pago' => $request->metodo_pago,
                    'cuenta_bancaria' => $request->cuenta_bancaria,
                    'monto' => $request->monto,
            ]);


            return redirect()->route('home')->with('success', 'Pago realizado exitosamente.');
        } else {
            return redirect()->back()->with('error', 'Recompensa sin stock.');
        }
    }
    public function show($id)
    {
        $pago = Pago::find($id);

        return view('pago.show', compact('pago'));
    }

    public function edit($id)
    {

        $pagos = Pago::find($id);
        $proyecto = Proyecto::findOrFail($pagos->id_proyecto);
        $recompensas = Recompensa::where('id_proyecto', $pagos->id_proyecto)->get();
        return view('pago.edit', compact('pagos','proyecto', 'recompensas'));
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
