<?php

namespace App\Http\Controllers;

use App\Models\Recompensa;
use Illuminate\Http\Request;

/**
 * Class RecompensaController
 * @package App\Http\Controllers
 */
class RecompensaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recompensas = Recompensa::paginate(10);

        return view('recompensa.index', compact('recompensas'))
            ->with('i', (request()->input('page', 1) - 1) * $recompensas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $recompensa = new Recompensa();
        return view('recompensa.create', compact('recompensa'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Recompensa::$rules);

        $recompensa = Recompensa::create($request->all());

        return redirect()->route('recompensas.index')
            ->with('success', 'Recompensa created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $recompensa = Recompensa::find($id);

        return view('recompensa.show', compact('recompensa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $recompensa = Recompensa::find($id);

        return view('recompensa.edit', compact('recompensa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Recompensa $recompensa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Recompensa $recompensa)
    {
        request()->validate(Recompensa::$rules);

        $recompensa->update($request->all());

        return redirect()->route('recompensas.index')
            ->with('success', 'Recompensa updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $recompensa = Recompensa::find($id)->delete();

        return redirect()->route('recompensas.index')
            ->with('success', 'Recompensa deleted successfully');
    }
}
