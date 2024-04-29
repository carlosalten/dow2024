<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JugadoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('jugadores')->insert([
            ['rut'=>'16953227-1','nombre'=>'Thomas','apellido'=>'Gillier','numero_camiseta'=>'28','posicion'=>'arquero', 'equipo_id'=>1],
            ['rut'=>'19685125-7','nombre'=>'Bryan','apellido'=>'González','numero_camiseta'=>'19','posicion'=>'volante', 'equipo_id'=>1],
            ['rut'=>'19856652-K','nombre'=>'Martín','apellido'=>'Ballesteros','numero_camiseta'=>'13','posicion'=>'arquero', 'equipo_id'=>5],
            ['rut'=>'18556871-1','nombre'=>'Bryan','apellido'=>'Carvallo','numero_camiseta'=>'7','posicion'=>'volante', 'equipo_id'=>5],
            ['rut'=>'20065998-5','nombre'=>'Tomás','apellido'=>'Tolosa','numero_camiseta'=>'23','posicion'=>'delantero', 'equipo_id'=>5],
            ['rut'=>'21676398-5','nombre'=>'Ian','apellido'=>'Garguez','numero_camiseta'=>'29','posicion'=>'defensa', 'equipo_id'=>4],
        ]);
    }
}
