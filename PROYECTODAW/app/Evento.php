<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    protected $fillable = ['titulo','descripcion','src_imagen','link','usuario_id'];
}
