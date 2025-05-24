<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;  // importar Str para slug
use App\Models\Pregunta; // no olvides importar

class Encuesta extends Model
{
    use HasFactory;

    protected $table = 'encuestas';

    protected $fillable = ['nombre', 'slug', 'categoria_id'];  // agregamos slug

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    // Relaciones

    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'categoria_id');
    }

    public function preguntas()
    {
        return $this->hasMany(Pregunta::class);
    }

    public function encuestados()
    {
        return $this->hasMany(Encuestado::class);
    }

    // Evento para crear slug antes de guardar

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($encuesta) {
            if (empty($encuesta->slug)) {
                $encuesta->slug = Str::slug($encuesta->nombre);
            }
        });

        // Opcional: actualizar slug si cambió el nombre
        static::updating(function ($encuesta) {
            if ($encuesta->isDirty('nombre')) {
                $encuesta->slug = Str::slug($encuesta->nombre);
            }
        });
    }
}
