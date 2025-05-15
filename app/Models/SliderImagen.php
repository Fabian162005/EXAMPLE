<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SliderImagen extends Model
{
    // Desactiva los timestamps
    public $timestamps = false;

    protected $table = 'slider_imagenes'; // Nombre correcto de la tabla

    protected $fillable = ['filename'];
}
