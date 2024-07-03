<?php

namespace Database\Factories;

use App\Models\Recompensa;
use App\Models\Proyecto;
use Illuminate\Database\Eloquent\Factories\Factory;

class RecompensaFactory extends Factory
{
    protected $model = Recompensa::class;

    public function definition()
    {
        return [
            'id_proyecto' => Proyecto::factory(),
            'titulo' => $this->faker->sentence,
            'monto' => $this->faker->randomFloat(2, 10, 1000),
            'imagen' => null,
            'descripcion' => $this->faker->paragraph,
            'complemento' => false,
            'patrocinadores' => false,
            'envio' => $this->faker->randomElement(['envios_todo_mundo', 'envios_algunos_paises', 'retiro_en_sitio', 'recompensa_digital']),
            'fecha_entrega' => $this->faker->date,
            'cantidad' => $this->faker->numberBetween(1, 100),
            'tiempo_oferta' => $this->faker->numberBetween(1, 30),
        ];
    }
}
