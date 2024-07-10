<?php

namespace App\Http\Controllers;

use App\Models\Proyecto;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Filtrar los proyectos que tienen el id_estado igual a 7
        $proyectos = Proyecto::with(['recompensas', 'historias', 'perfil.user', 'estado'])
        ->where('id_estado', 7)
        ->paginate(10);

        return view('home', compact('proyectos'))
            ->with('i', (request()->input('page', 1) - 1) * $proyectos->perPage());
    }
}
