<?php
namespace Database\Factories;

use App\Models\Evaluarproyecto;
use Illuminate\Database\Eloquent\Factories\Factory;

class EvaluarproyectoFactory extends Factory
{
    protected $model = Evaluarproyecto::class;

    public function definition()
    {
        return [
            'id_solicitud' => \App\Models\SolicitudProyecto::factory(),
            'documento_proyecto' => $this->faker->text,
            'documento_evaluacion' => $this->faker->text,
            'id_estado' => \App\Models\Estado::factory(),
            'id_evauser' => \App\Models\Perfil::factory(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
