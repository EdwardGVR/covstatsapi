<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pruebas extends Model
{
    use HasFactory;

    protected $fillable = [
        'usuario_id',
        'municipio_id',
        'tipo_id',
        'resultado_id'
    ];
}
