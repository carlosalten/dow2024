<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estadio extends Model
{
    use HasFactory;

    //nombre de la tabla en bd
    protected $table = 'estadios';

    //no se utiliza timestamps en tabla equipos
    public $timestamps = false;
}
