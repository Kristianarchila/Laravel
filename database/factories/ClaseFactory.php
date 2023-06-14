<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Clase>
 */
class ClaseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'titulo' => $this->faker -> word(),
            'descripcion' => $this->faker -> word(),
            'cursos_id' => $this->faker -> numberBetween(1, 10),
            'free' => $this->faker -> boolean(),


        ];
    }
}