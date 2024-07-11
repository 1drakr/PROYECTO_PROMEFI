<?php

namespace App\Http\Controllers;

use App\Models\Proyecto;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

class AlgoritmoController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $perfil = $user->perfil;

        $proyectos = Proyecto::with(['recompensas', 'historias', 'perfil.user', 'estado'])->paginate(10);

        return view('proyecto.index', compact('proyectos'))
            ->with('i', (request()->input('page', 1) - 1) * $proyectos->perPage());
    }
}
