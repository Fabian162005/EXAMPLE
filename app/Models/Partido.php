<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Partido extends Model
{
    protected $fillable = [
        'slug',
        'name',
        'filename',
        'logo',
        'contenido_html',
        // created_at y updated_at no van aquí; Eloquent los maneja solo
    ];
}