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
            ['nombre'=>'Universidad Católica','entrenador'=>'Nicolás Nuñez'],
            ['nombre'=>'Cobresal','entrenador'=>'Gustavo Huerta'] ,
            ['nombre'=>'Universidad de Chile','entrenador'=>'Gustavo Alvarez'],         
            ['nombre'=>'Palestino','entrenador'=>'Pablo Sánchez'],         
            ['nombre'=>'Unión Española','entrenador'=>'Miguel Ponce'],         
            ['nombre'=>'Deportes Iquique','entrenador'=>'Miguel Ramírez'],         
            ['nombre'=>'Coquimbo Unido','entrenador'=>'Fernando Díaz'],  
            ['nombre'=>'Everton','entrenador'=>'Esteban Solari'],         
            ['nombre'=>'OHiggins','entrenador'=>'Juan Manuel Azconzábal'],         
            ['nombre'=>'Colo-Colo','entrenador'=>'Jorge Almirón'],         
            ['nombre'=>'Cobreloa','entrenador'=>'Emiliano Astorga'],         
            ['nombre'=>'Huachipato','entrenador'=>'Javier Sanguinetti'],         
            ['nombre'=>'Ñublense','entrenador'=>'Mario Salas'],         
            ['nombre'=>'Audax Italiano','entrenador'=>'Francisco Arrué'],         
            ['nombre'=>'Unión La Calera','entrenador'=>'Manuel Fernández'],         
            ['nombre'=>'Deportes Copiapó','entrenador'=>'Ivo Basay'],         
        ]);
    }
}
