<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Storage;

class SubtituloFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $nombre = $this->faker->name();
        $descripcion = $this->faker->text();
        Storage::disk('public')->put($nombre.'.srt', $descripcion);

        return [
            'nombre' => $nombre,
            'descripcion' => $descripcion,
            'user_id' => 1,
            'cantidad_descargas' => random_int(0, 60000),
            'cantidad_upvotes' => random_int(0, 60000),
            'cantidad_downvotes' => random_int(0, 60000),
            'created_at' => now(),
        ];
    }
}
