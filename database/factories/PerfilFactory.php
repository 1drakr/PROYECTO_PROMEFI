<?php

namespace Database\Factories;

use App\Models\Perfil;
use Illuminate\Database\Eloquent\Factories\Factory;

class PerfilFactory extends Factory
{
    protected $model = Perfil::class;

    public function definition()
    {
        return [
            'id_users' => \App\Models\User::factory(),
            'Nombre' => $this->faker->firstName,
            'Apellido' => $this->faker->lastName,
            'Avatar' => $this->faker->imageUrl(),
            'Biografia' => $this->faker->paragraph,
            'Privacidad' => $this->faker->boolean,
            'Ubicacion' => $this->faker->city,
            'ZonaHoraria' => $this->faker->timezone,
            'UrlPerso' => $this->faker->url,
            'SitioWeb' => $this->faker->url,
            'id_rol' => \App\Models\Rol::factory(),
            'Estado' => $this->faker->boolean
        ];
    }
}
