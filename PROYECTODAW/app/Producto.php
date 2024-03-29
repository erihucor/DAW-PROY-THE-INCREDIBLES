<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $fillable = ['nombreProducto','precio','cantidad','categoria_id','estado_id'];


	/*Relaciones entre modelos*/

	public function categorias(){
		return $this->hasAny('Categoria');
	}

	public function estados(){
		return $this->hasOne('Estado');
	}

}
