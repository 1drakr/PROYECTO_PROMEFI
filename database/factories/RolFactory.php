<?php
namespace Database\Factories;

use App\Models\Rol;
use Illuminate\Database\Eloquent\Factories\Factory;

class RolFactory extends Factory
{
    protected $model = Rol::class;

    public function definition()
    {
        return [
            'Nombre' => $this->faker->word,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
