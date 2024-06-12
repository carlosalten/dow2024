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
}
