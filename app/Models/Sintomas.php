<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sintomas extends Model
{
    use HasFactory;

    public function gravedad () {
        return $this->belongsTo(GravedadesSintomas::class);
    }

    protected $fillable = [
        'sintomas',
        'descripcion',
        'gravedad_id'
    ];
}
