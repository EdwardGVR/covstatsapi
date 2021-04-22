<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pruebas extends Model
{
    use HasFactory;

    public function tipo () {
        return $this->belongsTo(TiposPruebas::class);
    }

    public function resultado () {
        return $this->belongsTo(ResultadosPruebas::class);
    }

    public function municipio () {
        return $this->belongsTo(Municipios::class);
    }

    protected $fillable = [
        'usuario_id',
        'municipio_id',
        'tipo_id',
        'resultado_id'
    ];
}
