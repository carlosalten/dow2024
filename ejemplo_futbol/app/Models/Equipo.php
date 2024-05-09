<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Equipo extends Model
{
    use HasFactory,SoftDeletes;

    //la tabla se llama equipos
    protected $table = 'equipos';

    //no se utiliza timestamps en tabla equipos
    public $timestamps = false;

    //relacion 1:N con jugadores
    public function jugadores():HasMany{
        return $this->hasMany(Jugador::class);
    }
}
