<?php

namespace App\Http\Controllers;

use App\Models\Recompensa;
use Illuminate\Http\Request;

class RecompensaController extends Controller
{

    public function index()
    {
        $recompensas = Recompensa::paginate(10);

        return view('recompensa.index', compact('recompensas'))
            ->with('i', (request()->input('page', 1) - 1) * $recompensas->perPage());
    }

    public function create()
    {
        $recompensa = new Recompensa();
        return view('recompensa.create', compact('recompensa'));
    }

    public function store(Request $request)
    {
        request()->validate(Recompensa::$rules);

        $recompensa = Recompensa::create($request->all());

        return redirect()->route('recompensas.index')
            ->with('success', 'Recompensa created successfully.');
    }

    public function show($id)
    {
        $recompensa = Recompensa::find($id);

        return view('recompensa.show', compact('recompensa'));
    }

    public function edit($id)
    {
        $recompensa = Recompensa::find($id);

        return view('recompensa.edit', compact('recompensa'));
    }

    public function update(Request $request, Recompensa $recompensa)
    {
        request()->validate(Recompensa::$rules);

        $recompensa->update($request->all());

        return redirect()->route('recompensas.index')
            ->with('success', 'Recompensa updated successfully');
    }

    public function destroy($id)
    {
        $recompensa = Recompensa::find($id)->delete();

        return redirect()->route('recompensas.index')
            ->with('success', 'Recompensa deleted successfully');
    }
}
