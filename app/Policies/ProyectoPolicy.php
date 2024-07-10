<?php

namespace App\Policies;

use App\Models\Proyecto;
use App\Models\User;
use App\Models\Perfil;

class ProyectoPolicy
{
    public function view(User $user, Proyecto $proyecto)
    {
        $perfil = $user->perfil;
        if ($perfil->rol->Nombre === 'Administrador') {
            return true; // Los administradores pueden ver todos los proyectos
        }
        return $user->id === $proyecto->perfil->id_users; // Otros usuarios pueden ver solo sus proyectos
    }
}
