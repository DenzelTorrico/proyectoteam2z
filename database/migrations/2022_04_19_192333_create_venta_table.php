<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVentaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('venta', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idDetalle');
            $table->foreign('idDetalle')->references('id')->on('detalleventa');
            $table->unsignedBigInteger('idUsuario');
            $table->foreign('idUsuario')->references('id')->on('users');
            $table->double('total');
            $table->date('fechaPago');
            $table->date('fechaEnvio');
            $table->boolean('estadoVenta');
            $table->unsignedBigInteger('idMetodoPago');
            $table->foreign('idMetodoPago')->references('id')->on('metodopago');
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
        Schema::dropIfExists('venta');
    }
}
