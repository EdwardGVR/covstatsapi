<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetallesAutoevaluacion extends Model
{
    use HasFactory;

    public function autoevaluacion () {
        return $this->belongsTo(Autoevaluaciones::class);
    }

    public function sintoma () {
        return $this->belongsTo(Sintomas::class);
    }

    protected $fillable = [
        'autoevaluacion_id',
        'sintoma_id'
    ];
}
