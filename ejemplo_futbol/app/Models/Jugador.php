<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Jugador extends Model
{
    use HasFactory;

    //nombre de la tabla en bd
    protected $table = 'jugadores';

    //la clave primaria es rut (cuando es distinta de ID hay que indicar el nombre)
    protected $primaryKey = 'rut';

    //el tipo de dato de la PK no es integer
    protected $keyType = 'string';

    //la PK no autoincrementa
    public $incrementing = false;

    //no se utiliza timestamps en tabla equipos
    public $timestamps = false;

    //relacion 1:N con equipo
    public function equipo():BelongsTo{
        return $this->belongsTo(Equipo::class);
    }
}
