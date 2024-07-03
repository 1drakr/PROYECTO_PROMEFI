<?php
namespace Database\Factories;

use App\Models\Proyecto;
use App\Models\Estado;
use App\Models\Perfil;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProyectoFactory extends Factory
{
    protected $model = Proyecto::class;

    public function definition()
    {
        return [
            'titulo' => $this->faker->sentence,
            'subtitulo' => $this->faker->sentence,
            'categoria_principal' => $this->faker->word,
            'categoria' => $this->faker->word,
            'subcategoria' => $this->faker->word,
            'ubicacion' => $this->faker->city,
            'imagen' => null,
            'video' => null,
            'fecha_limite' => $this->faker->date,
            'duracion_campaña' => $this->faker->numberBetween(1, 100),
            'monto_meta' => $this->faker->randomFloat(2, 1000, 100000),
            'riesgos_desafios' => $this->faker->paragraph,
            'uso_ia' => 0,
            'pago' => 0,
            'tipo_proyecto' => 'individuo',
            'id_estado' => Estado::factory(),
            'completado' => 0,
            'id_perfil' => Perfil::factory(),
        ];
    }
}
