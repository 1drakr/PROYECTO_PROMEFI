<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    public function handle($request, Closure $next, $role)
    {
        if (!Auth::check()) {
            return redirect('/login');
        }

        $user = Auth::user();
        $perfil = $user->perfil;

        if (!$perfil) {
            return redirect('/home')->with('error', 'No tienes un perfil asociado.');
        }

        $rol = $perfil->rol;

        if (!$rol) {
            return redirect('/home')->with('error', 'Tu perfil no tiene un rol asociado.');
        }

        // Permitir que los administradores accedan a todas las rutas
        if ($rol->Nombre === 'Administrador' || $rol->Nombre === $role) {
            return $next($request);
        }

        return redirect('/home')->with('error', 'No tienes permiso para acceder a esta página.');
    }
}
