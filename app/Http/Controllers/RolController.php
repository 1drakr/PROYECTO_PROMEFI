<?php

namespace App\Http\Controllers;

use App\Models\Rol;
use Illuminate\Http\Request;

/**
 * Class RolController
 * @package App\Http\Controllers
 */
class RolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rols = Rol::paginate(10);

        return view('rol.index', compact('rols'))
            ->with('i', (request()->input('page', 1) - 1) * $rols->perPage());
    }

    public function create()
    {
        $rol = new Rol();
        return view('rol.create', compact('rol'));
    }

    public function store(Request $request)
    {
        request()->validate(Rol::$rules);

        $rol = Rol::create($request->all());

        return redirect()->route('rol.index')
            ->with('success', 'Rol created successfully.');
    }

    public function show($id)
    {
        $rol = Rol::find($id);

        return view('rol.show', compact('rol'));
    }


    public function edit($id)
    {
        $rol = Rol::find($id);

        return view('rol.edit', compact('rol'));
    }

    public function update(Request $request, Rol $rol)
    {
        request()->validate(Rol::$rules);

        $rol->update($request->all());

        return redirect()->route('rol.index')
            ->with('success', 'Rol updated successfully');
    }

    public function destroy($id)
    {
        $rol = Rol::find($id)->delete();

        return redirect()->route('rol.index')
            ->with('success', 'Rol deleted successfully');
    }

    public function search(Request $request)
    {
        $query = $request->get('query');
        $rols = Rol::where('id_rol', 'LIKE', "%{$query}%")
                    ->orWhere('Nombre', 'LIKE', "%{$query}%")
                    ->get();

        return response()->json($rols);
    }
}
