<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PedidoDetalle extends Model
{
    protected $fillable = ['cantidad','precio','pedido_id','producto_id'];

    /*Relaciones entre modelos*/

	public function pedidos(){
		return $this->hasOne('Pedido');
	}

	public function productos(){
		return $this->hasMany('Producto');
	}
}
