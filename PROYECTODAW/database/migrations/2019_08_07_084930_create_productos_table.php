<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->bigIncrements('producto_id');
            $table->string('nombreProducto',20);
            $table->float('precio');
            $table->integer('cantidad');
            $table->timestamps();

            //Claves foraneas

            $table->unsignedBigInteger('categoria_id');
			$table->foreign('categoria_id')->references('categoria_id')->on('categorias')->onDelete('cascade');

            $table->unsignedBigInteger('estado_id');
			$table->foreign('estado_id')->references('estado_id')->on('estados')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
}
