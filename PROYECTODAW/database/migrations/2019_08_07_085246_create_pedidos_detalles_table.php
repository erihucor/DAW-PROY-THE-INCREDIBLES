<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePedidosDetallesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidosDetalles', function (Blueprint $table) {
        	$table->integer('cantidad');
        	$table->float('precio');
            //Claves foraneas
            $table->unsignedBigInteger('pedido_id')->primary();//Tambien es clave primaria
            $table->foreign('pedido_id')->references('pedido_id')->on('pedidos')->onDelete('cascade');

            $table->unsignedBigInteger('producto_id');
            $table->foreign('producto_id')->references('producto_id')->on('productos')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pedidosDetalles');
    }
}
