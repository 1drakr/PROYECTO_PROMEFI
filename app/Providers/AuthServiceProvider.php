<?php

namespace App\Providers;

use App\Models\Proyecto;
use App\Policies\ProyectoPolicy;
use App\Models\Evaluarproyecto;
use App\Policies\EvaluarProyectoPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    protected $policies = [
        Proyecto::class => ProyectoPolicy::class,
        Evaluarproyecto::class => EvaluarProyectoPolicy::class,
    ];

    public function boot()
    {
        $this->registerPolicies();
    }
}
