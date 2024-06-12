<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\Solicitud;

class SolicitudesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // TIPO
        // 1: Convalidación
        // 2: Cambio de Carrera
        // 3: Inscripción de Asignatura
        // 4: Desinscripción de Asignatura

        // ESTADO
        // 0: Pendiente
        // 1: Procesando
        // 2: Finalizada

        // RESOLUCION
        // 0: Sin resolución
        // 1: Rechazada
        // 2: Aceptada
        // 3: Aceptada con condiciones

        //el campo created_at se ingresa con una fecha al azar dentro de los 30 días anteriores
        //en minutos para que las fechas tengan distintas horas
        //si les da lo mismo la hr y no la van a mostrar, entonces solo le agregan días con subDays()
        $minutos = 30*24*60;
        DB::table('solicitudes')->insert([
            ['tipo'=>2,'estado'=>2,'resolucion'=>1,'usuario_email'=>'estu1@usm.cl','created_at'=>Carbon::now()->subMinutes(rand(1,$minutos))],
            ['tipo'=>3,'estado'=>2,'resolucion'=>3,'usuario_email'=>'estu2@usm.cl','created_at'=>Carbon::now()->subMinutes(rand(1,$minutos))],
            ['tipo'=>2,'estado'=>1,'resolucion'=>0,'usuario_email'=>'estu2@usm.cl','created_at'=>Carbon::now()->subMinutes(rand(1,$minutos))],
            ['tipo'=>3,'estado'=>2,'resolucion'=>1,'usuario_email'=>'estu2@usm.cl','created_at'=>Carbon::now()->subMinutes(rand(1,$minutos))],
            ['tipo'=>1,'estado'=>1,'resolucion'=>0,'usuario_email'=>'estu1@usm.cl','created_at'=>Carbon::now()->subMinutes(rand(1,$minutos))],
            ['tipo'=>4,'estado'=>0,'resolucion'=>0,'usuario_email'=>'estu2@usm.cl','created_at'=>Carbon::now()->subMinutes(rand(1,$minutos))],
        ]);

        //asigna valor al campo updated_at
        //si aun está pendiente de proceso se le asigna lo mismo que created_at
        //si está en proceso o finalizada se le suman días al azar entre 1 y 15
        $solicitudes = Solicitud::all();
        foreach($solicitudes as $solicitud)
        {
            if($solicitud->estado==0){
                $solicitud->updated_at = $solicitud->created_at;
            }else{
                $minutos_desde = 1*24*60;
                $minutos_hasta = 15*24*60;
                $solicitud->updated_at = Carbon::parse($solicitud->created_at)->addMinutes(rand($minutos_desde,$minutos_hasta));
            }        
            $solicitud->save();
        }
    }
}
