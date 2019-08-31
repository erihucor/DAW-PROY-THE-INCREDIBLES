<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model{
	
	protected $fillable = ['usuario_id','estadoPedido_id'];

	/*Relaciones entre modelos*/

	public function users(){
		return $this->hasOne('User');
	}
	
	public function estadoPedidos(){
		return $this->hasOne('EstadoPedido');
	}
}
