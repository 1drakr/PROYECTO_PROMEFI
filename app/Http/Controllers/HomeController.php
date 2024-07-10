<?php

namespace App\Http\Controllers;

use App\Models\Proyecto;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    // public function index()
    // {
    //     // Filtrar los proyectos que tienen el id_estado igual a 7
    //     $proyectos = Proyecto::with(['recompensas', 'historias', 'perfil.user', 'estado'])
    //     ->where('id_estado', 7)
    //     ->paginate(10);

    //     return view('home', compact('proyectos'))
    //         ->with('i', (request()->input('page', 1) - 1) * $proyectos->perPage());
    // }

    public function index(Request $request)
    {
        // Crear una instancia de query para Proyecto con relaciones
        $query = Proyecto::with(['recompensas', 'historias', 'perfil.user', 'estado'])
            ->where('id_estado', 7);

        // Aplicar filtros si los valores están presentes en la solicitud
        if ($request->filled('titulo')) {
            $query->where('titulo', 'like', '%' . $request->titulo . '%');
        }

        if ($request->filled('categoria')) {
            $query->where('categoria', 'like', '%' . $request->categoria . '%');
        }

        if ($request->filled('ubicacion')) {
            $query->where('ubicacion', 'like', '%' . $request->ubicacion . '%');
        }

        if ($request->filled('fecha_inicio')) {
            $query->whereDate('fecha_inicio', '>=', $request->fecha_inicio);
        }

        if ($request->filled('fecha_termino')) {
            $query->whereDate('fecha_termino', '<=', $request->fecha_termino);
        }

        // Obtener los resultados paginados
        $proyectos = $query->paginate(10);

        // Retornar la vista con los proyectos filtrados
        return view('home', compact('proyectos'))
            ->with('i', (request()->input('page', 1) - 1) * $proyectos->perPage());
    }
}
