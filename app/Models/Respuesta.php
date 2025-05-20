<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Respuesta extends Model
{
    use HasFactory;

    protected $fillable = ['encuestado_id', 'pregunta_id', 'respuesta'];

    public function encuestado()
    {
        return $this->belongsTo(Encuestado::class);
    }

    public function pregunta()
    {
        return $this->belongsTo(Pregunta::class);
    }
}
