<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->bigIncrements('usuario_id');
            $table->string('user',10);
            $table->string('password',20);

            //Claves foraneas

            $table->unsignedBigInteger('rol_id');
			$table->foreign('rol_id')->references('rol_id')->on('roles')->onDelete('cascade');

            $table->unsignedBigInteger('estado_id');
			$table->foreign('estado_id')->references('estado_id')->on('estados')->onDelete('cascade');

            $table->string('ci',10);
			$table->foreign('ci')->references('ci')->on('personas')->onDelete('cascade');


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
        Schema::dropIfExists('usuarios');
    }
}
