<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResultadosPruebas extends Model
{
    use HasFactory;

    protected $fillable = [
        'resultado',
        'descripcion'
    ];
}
