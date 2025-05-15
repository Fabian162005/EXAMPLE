<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Respuesta extends Model
{
    use HasFactory;

    protected $fillable = [
        'encuesta_id',
        'pregunta',
        'respuesta',
        // 'sexo',
        // 'edad',
    ];


    public function encuesta()
    {
        return $this->belongsTo(Encuesta::class);
    }
}   
