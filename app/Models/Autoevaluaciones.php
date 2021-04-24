<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Autoevaluaciones extends Model
{
    use HasFactory;

    public function usuario () {
        return $this->belongsTo(UserController::class);
    }

    protected $fillable = [
        'usuario_id'
    ];
}
