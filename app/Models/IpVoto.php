<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IpVoto extends Model
{
    protected $fillable = ['ip', 'encuesta_id'];
}
