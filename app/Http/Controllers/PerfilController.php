<?php

namespace App\Http\Controllers;

use App\Models\Perfil;
use App\Models\Rol;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PerfilController extends Controller
{
    public function index()
    {
        $perfils = Perfil::with('rol')->paginate(10);
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

    public function asignarRolForm($id)
    {
        $perfil = Perfil::findOrFail($id);
        $roles = Rol::pluck('nombre', 'id_rol'); // Obtener los roles disponibles

        return view('perfil.asignar_rol', compact('perfil', 'roles'));
    }

    public function asignarRol(Request $request, $id)
    {
        $perfil = Perfil::findOrFail($id);
        $perfil->id_rol = $request->input('id_rol');
        $perfil->save();

        return redirect()->route('perfil.index')
            ->with('success', 'Rol asignado exitosamente');
    }

    public function editUsuario()
    {
        $user = Auth::user();
        $perfil = $user->perfil;

        return view('perfil.perfils.edit', compact('perfil', 'user'));
    }

    public function updateUsuario(Request $request, Perfil $perfil)
    {
        $request->validate(array_merge(Perfil::$rules, [
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]));

        // Manejo de la subida de la imagen
        if ($request->hasFile('avatar')) {
            $avatar = $request->file('avatar');
            $avatarPath = $avatar->store('avatars', 'public');
            $perfil->Avatar = $avatarPath;
        }

        // Actualizar otros campos del perfil
        $perfil->update($request->except('avatar'));

        // Actualizar los campos del usuario
        $perfil->user->update([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
        ]);

        return redirect()->route('home')
            ->with('success', 'Perfil updated successfully');
    }


    // public function updateUsuario(Request $request, Perfil $perfil)
    // {


    //     request()->validate(Perfil::$rules);

    //     $perfil->update($request->all());

    //     return redirect()->route('perfils.index')
    //         ->with('success', 'Perfil updated successfully');
    // }
}
