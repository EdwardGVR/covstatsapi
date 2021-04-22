<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    use HasFactory;

    public function categoria () {
        return $this->belongsTo(Categorias::class);
    }

    protected $fillable = [
        "titulo",
        "contenido",
        "categoria_id"
    ];
}
