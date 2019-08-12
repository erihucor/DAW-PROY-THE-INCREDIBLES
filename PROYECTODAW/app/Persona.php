<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $fillable = ['ci','nombre','apellido','fechaDeNacimiento','direccion','telefono','e-mail'];
}
