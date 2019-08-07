<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->bigIncrements('pedido_id');
            $table->timestamps();

            //Claves foraneas

            $table->unsignedBigInteger('usuario_id');
            $table->foreign('usuario_id')->references('usuario_id')->on('usuarios')->onDelete('cascade');

            $table->unsignedBigInteger('estadoPedido_id');
            $table->foreign('estadoPedido_id')->references('estadoPedido_id')->on('estadosPedidos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pedidos');
    }
}
