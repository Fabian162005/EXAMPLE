<?php
// app/Models/SliderImagen.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SliderImagen extends Model
{
    public $timestamps = false;

    protected $table = 'slider_imagenes';

    protected $fillable = ['filename', 'imagen_url'];
}
