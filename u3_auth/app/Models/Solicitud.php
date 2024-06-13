<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Solicitud extends Model
{
    use HasFactory;

    protected $table = 'solicitudes';

    public function estudiante(): BelongsTo
    {
        return $this->belongsTo(Usuario::class,'usuario_email','email');
    }

    public function nombreTipo():String
    {
        $nombreTipo = 'Sin Tipo';
        switch ($this->tipo)
        {
            case 1: $nombreTipo='Convalidación';break;
            case 2: $nombreTipo='Cambio de Carrera';break;
            case 3: $nombreTipo='Inscripción de Asignatura';break;
            case 4: $nombreTipo='Desinscripción de Asignatura';break;
        }
        return $nombreTipo;
    }

    public function nombreEstado():String
    {
        return $this->estado==0?'Pendiente':($this->estado==1?'Procesando':'Finalizada');
    }

    public function nombreResolucion():String
    {
        $nombres = ['Sin Resolución','Rechazada','Aceptada','Aceptada con condiciones'];
        return $nombres[$this->resolucion];
    }
}
