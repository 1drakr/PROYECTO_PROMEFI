<?php

namespace Database\Factories;

use App\Models\Historia;
use App\Models\Proyecto;
use Illuminate\Database\Eloquent\Factories\Factory;

class HistoriaFactory extends Factory
{
    protected $model = Historia::class;

    public function definition()
    {
        return [
            'id_proyecto' => Proyecto::factory(),
            'titulo' => $this->faker->sentence,
            'texto' => $this->faker->paragraph,
            'video' => null,
            'imagen' => null,
        ];
    }
}
