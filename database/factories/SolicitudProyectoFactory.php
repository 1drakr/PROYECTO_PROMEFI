<?php

namespace Database\Factories;

use App\Models\Solicitudproyecto;
use App\Models\Proyecto;
use App\Models\User;
use App\Models\Estado;
use Illuminate\Database\Eloquent\Factories\Factory;

class SolicitudproyectoFactory extends Factory
{
    protected $model = Solicitudproyecto::class;

    public function definition()
    {
        return [
            'id_proyecto' => Proyecto::factory(),
            'id_usuario' => User::factory(),
            'fecha_registro' => $this->faker->dateTime()->format('Y-m-d H:i:s'),
            'id_estado' => Estado::factory(),
        ];
    }
}
