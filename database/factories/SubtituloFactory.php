<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SubtituloFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->name(),
            'descripcion' => $this->faker->text(),
            'user_id' => 1,
            'cantidad_descargas' => random_int(0, 60000),
            'created_at' => now(),
        ];
    }
}
