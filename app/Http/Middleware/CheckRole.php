<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    public function handle($request, Closure $next, $roles)
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

        // Convertir roles a un array si no lo es
        $roles = is_array($roles) ? $roles : explode('|', $roles);

        // Permitir que los administradores accedan a todas las rutas
        if ($rol->Nombre === 'Administrador' || in_array($rol->Nombre, $roles)) {
            return $next($request);
        }

        //dd('Rol del usuario:', $rol->Nombre, 'Rol requerido:', $roles);

        return redirect('/home')->with('error', 'No tienes permiso para acceder a esta página.');
    }
}
