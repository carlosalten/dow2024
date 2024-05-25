<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Partido extends Model
{
    use HasFactory;

    //nombre de la tabla en bd
    protected $table = 'partidos';

    //no se utiliza timestamps en tabla equipos
    public $timestamps = false;

    //relacion M:N con equipo
    public function equipos():BelongsToMany
    {
        return $this->belongsToMany(Equipo::class)->withPivot(['es_local','goles']);
    }

    //relacion 1:N con estadio
    public function estadio():BelongsTo
    {
        return $this->belongsTo(Estadio::class);
    }
}
