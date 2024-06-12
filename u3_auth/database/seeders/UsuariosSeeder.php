<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //solo para facilidad de uso en el ejemplo se repiten algunos passwords
        DB::table('usuarios')->insert([
            ['email'=>'admin1@usm.cl','password'=>Hash::make('1234'),'nombre'=>'Administrador 1','activo'=>true,'rol_id'=>1],
            ['email'=>'func1@usm.cl','password'=>Hash::make('1234'),'nombre'=>'Funcionario 1','activo'=>true,'rol_id'=>2],
            ['email'=>'estu1@usm.cl','password'=>Hash::make('5678'),'nombre'=>'Estudiante 1','activo'=>true,'rol_id'=>3],
            ['email'=>'estu2@usm.cl','password'=>Hash::make('5678'),'nombre'=>'Estudiante 2','activo'=>true,'rol_id'=>3],
        ]);
    }
}
