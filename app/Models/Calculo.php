<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Calculo extends Model
{
    // Campos que se pueden guardar masivamente
    protected $fillable = [
        'numero1',
        'numero2',
        'operacion',
        'resultado',
    ];

    // Tipos de cada campo
    protected $casts = [
        'numero1'   => 'decimal:4',
        'numero2'   => 'decimal:4',
        'resultado' => 'decimal:4',
    ];
}