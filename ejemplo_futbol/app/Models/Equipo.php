<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    use HasFactory;

    //la tabla se llama equipos
    protected $table = 'equipos';

    //no se utiliza timestamps en tabla equipos
    public $timestamps = false;
}
