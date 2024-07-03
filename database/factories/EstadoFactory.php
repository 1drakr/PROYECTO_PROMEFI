<?php
namespace Database\Factories;

use App\Models\Estado;
use Illuminate\Database\Eloquent\Factories\Factory;

class EstadoFactory extends Factory
{
    protected $model = Estado::class;

    public function definition()
    {
        return [
            'nombre_estado' => $this->faker->word,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
