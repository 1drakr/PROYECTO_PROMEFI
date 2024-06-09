<?php

namespace App\Http\Controllers;

use App\Models\Perfil;
use Illuminate\Http\Request;

/**
 * Class PerfilController
 * @package App\Http\Controllers
 */
class PerfilController extends Controller
{


    public function index()
    {
        $perfils = Perfil::paginate(10);

        return view('perfil.index', compact('perfils'))
            ->with('i', (request()->input('page', 1) - 1) * $perfils->perPage());
    }

    public function create()
    {
        $perfil = new Perfil();
        return view('perfil.create', compact('perfil'));
    }

    public function store(Request $request)
    {
        request()->validate(Perfil::$rules);

        $perfil = Perfil::create($request->all());

        return redirect()->route('perfils.index')
            ->with('success', 'Perfil created successfully.');
    }

    public function show($id)
    {
        $perfil = Perfil::find($id);

        return view('perfil.show', compact('perfil'));
    }


    public function edit($id)
    {
        $perfil = Perfil::find($id);

        return view('perfil.edit', compact('perfil'));
    }

    public function update(Request $request, Perfil $perfil)
    {
        request()->validate(Perfil::$rules);

        $perfil->update($request->all());

        return redirect()->route('perfils.index')
            ->with('success', 'Perfil updated successfully');
    }

    public function destroy($id)
    {
        $perfil = Perfil::find($id)->delete();

        return redirect()->route('perfils.index')
            ->with('success', 'Perfil deleted successfully');
    }
}
