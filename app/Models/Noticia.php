<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    protected $table = 'noticias'; // nombre correcto de la tabla

    // Si usas fillable o guarded
    protected $fillable = ['titulo', 'descripcion', 'foto', 'video', 'created_at', 'updated_at'];
}
