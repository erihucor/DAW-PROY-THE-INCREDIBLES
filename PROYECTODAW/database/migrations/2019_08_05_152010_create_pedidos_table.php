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
            
            $table->integer('usuario_id');
            $table->foreign('usuario_id')->references('usuario_id')
            ->on('usuarios')->onDelete('cascade');
            $table->integer('estadopedido_id');
            $table->foreign('estadopedido_id')->references('estadopedido_id')
            ->on('estadoPedido')->onDelete('cascade');
            
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
        Schema::dropIfExists('pedidos');
    }
}
