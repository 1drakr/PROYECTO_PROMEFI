<?php

namespace App\Http\Controllers;

use App\Models\Complemento;
use Illuminate\Http\Request;

/**
 * Class ComplementoController
 * @package App\Http\Controllers
 */
class ComplementoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $complementos = Complemento::paginate(10);

        return view('complemento.index', compact('complementos'))
            ->with('i', (request()->input('page', 1) - 1) * $complementos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $complemento = new Complemento();
        return view('complemento.create', compact('complemento'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Complemento::$rules);

        $complemento = Complemento::create($request->all());

        return redirect()->route('complementos.index')
            ->with('success', 'Complemento created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $complemento = Complemento::find($id);

        return view('complemento.show', compact('complemento'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $complemento = Complemento::find($id);

        return view('complemento.edit', compact('complemento'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Complemento $complemento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Complemento $complemento)
    {
        request()->validate(Complemento::$rules);

        $complemento->update($request->all());

        return redirect()->route('complementos.index')
            ->with('success', 'Complemento updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $complemento = Complemento::find($id)->delete();

        return redirect()->route('complementos.index')
            ->with('success', 'Complemento deleted successfully');
    }
}
