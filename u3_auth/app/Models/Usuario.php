<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Usuario extends Model
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


}
