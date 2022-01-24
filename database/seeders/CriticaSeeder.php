<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CriticaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
                'user_id' => 1,
                'subtitulo_id' => 1,
                'criticado' => true,
                'titulo_pelicula' => 'Chernobyl Abyss (2021) [1080p] [BluRay] [5.1] [YTS.MX]',
        ]);//Critica positiva
        DB::table('users')->insert([
                'user_id' => 1,
                'subtitulo_id' => 3,
                'criticado' => true,
                'titulo_pelicula' => '',
        ]);//Critica negativa
        DB::table('users')->insert([
                'user_id' => 1,
                'subtitulo_id' => 2,
                'criticado' => false,
                'titulo_pelicula' => null,
        ]);//No criticó
    }
}
