<?php

namespace App\Http\Controllers;

use App\Models\Historium;
use Illuminate\Http\Request;

/**
 * Class HistoriumController
 * @package App\Http\Controllers
 */
class HistoriumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $historia = Historium::paginate(10);

        return view('historium.index', compact('historia'))
            ->with('i', (request()->input('page', 1) - 1) * $historia->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $historium = new Historium();
        return view('historium.create', compact('historium'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Historium::$rules);

        $historium = Historium::create($request->all());

        return redirect()->route('historia.index')
            ->with('success', 'Historium created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $historium = Historium::find($id);

        return view('historium.show', compact('historium'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $historium = Historium::find($id);

        return view('historium.edit', compact('historium'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Historium $historium
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Historium $historium)
    {
        request()->validate(Historium::$rules);

        $historium->update($request->all());

        return redirect()->route('historia.index')
            ->with('success', 'Historium updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $historium = Historium::find($id)->delete();

        return redirect()->route('historia.index')
            ->with('success', 'Historium deleted successfully');
    }
}
