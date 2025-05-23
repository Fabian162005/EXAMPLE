<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    // Indicas el nombre de la tabla explícitamente
    protected $table = 'categorias'; 

    // Campos que puedes asignar masivamente
    protected $fillable = ['nombre'];

    /**
     * Una categoría tiene muchas encuestas
     */
    public function encuestas()
    {
        return $this->hasMany(Encuesta::class);
    }

}
