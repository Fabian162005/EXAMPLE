<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Opcion extends Model
{
    use HasFactory;

    protected $table = 'opciones';  // <-- así Laravel sabe usar la tabla correcta

    protected $fillable = ['pregunta_id', 'texto'];

    public function pregunta()
    {
        return $this->belongsTo(Pregunta::class);
    }
}
