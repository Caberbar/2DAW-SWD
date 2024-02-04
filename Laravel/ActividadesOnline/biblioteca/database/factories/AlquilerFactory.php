<?php

namespace Database\Factories;

use App\Models\Alquiler;
use App\Models\Usuario;
use App\Models\Libro;
use Illuminate\Database\Eloquent\Factories\Factory;

class AlquilerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Alquiler::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'usuario_id' => Usuario::factory(),
            'libro_id' => Libro::factory(),
            'fecha_alquiler' => $this->faker->date(),
            'fecha_devolucion' => $this->faker->date(),
        ];
    }
}