<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Evaluarproyecto;

class EvaluarProyectoPolicy
{
    public function view(User $user, Evaluarproyecto $evaluarproyecto)
    {
        $perfil = $user->perfil;
        if ($perfil->rol->Nombre === 'Administrador') {
            return true; // Los administradores pueden ver todos los proyectos evaluados
        }
        return $perfil->id_perfil === $evaluarproyecto->id_evauser; // Evaluadores solo pueden ver sus proyectos asignados
    }
}
