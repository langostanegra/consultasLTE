<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BibliotecaCredencial extends Model
{
    protected $fillable = [
        'cedula', 'nombre', 'correo_institucional', 'usuario_medellin', 'password_medellin', 'estado',
    ];
}
