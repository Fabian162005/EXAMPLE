<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AdminUser extends Model
{
    // Campos que pueden ser asignados masivamente
    protected $fillable = ['username', 'password'];

    // Ocultar la contraseña en serializaciones (JSON, arrays, etc.)
    protected $hidden = ['password'];

    /**
     * Mutator para hashear la contraseña automáticamente al asignarla
     *
     * @param string $value
     * @return void
     */
    public function setPasswordAttribute($value)
    {
        // Si el valor no está vacío y no comienza con '$2y$' (formato bcrypt)
        if (!empty($value) && !Str::startsWith($value, '$2y$')) {
            $this->attributes['password'] = Hash::make($value);
        } else {
            // Si ya está hasheado o es vacío, asignar tal cual
            $this->attributes['password'] = $value;
        }
    }
}
