<?php

namespace Database\Factories;

use App\Models\Libro;
use App\Models\Autor;
use Illuminate\Database\Eloquent\Factories\Factory;

class LibroFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Libro::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'titulo' => $this->faker->sentence,
            'autor_id' => Autor::factory(),
            'editorial' => $this->faker->company,
            'anio_publicacion' => $this->faker->year,
        ];
    }
}