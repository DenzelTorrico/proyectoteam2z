<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Carrito extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carrito', function (Blueprint $table) {
            $table->id();
            $table->integer('cantidad')->unsigned();
            $table->unsignedBigInteger("idProducto");
            $table->foreign('idProducto')->references("id")->on('productos');
            $table->unsignedBigInteger("idUsuario");
            $table->foreign('idUsuario')->references("id")->on('users');
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
        //
    }
}
