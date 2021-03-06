<?php

namespace Database\Seeders;

use App\Models\Subtitulo;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
        ]);
        Subtitulo::factory()->count(100)->create();
        $this->call(CriticaSeeder::class);
    }
}
