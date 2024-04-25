<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EquiposSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('equipos')->insert([
            ['nombre'=>'Curicó Unido','entrenador'=>'Damián Muñoz'],
            ['nombre'=>'Universidad Católica','entrenador'=>'Cristian Paolucci'],
            ['nombre'=>'Cobresal','entrenador'=>'Gustavo Huerta']          
        ]);
    }
}
