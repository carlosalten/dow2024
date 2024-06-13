<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuario extends Authenticatable
{
    use HasFactory;

    protected $table = 'usuarios';
    protected $primaryKey = 'email';
    protected $keyType = 'string';
    public $incrementing = false;
    public $timestamps = false;

    //relación con Rol
    public function rol():BelongsTo
    {
        return $this->belongsTo(Rol::class);
    }

    //relación con solicitudes
    public function solicitudes():HasMany
    {
        return $this->hasMany(Solicitud::class,'usuario_email','email');
    }

    //retorna el nombre del rol del usuario
    public function nombreRol():String
    {
        return $this->rol->nombre;
    }

    public function esAdministrador():bool
    {
        return $this->rol->nombre=='Administrador';
    }

    public function esFuncionario():bool
    {
        return $this->rol->nombre=='Funcionario';
    }

    public function esEstudiante():bool
    {
        return $this->rol->nombre=='Estudiante';
    }
}
