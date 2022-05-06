<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use League\CommonMark\Reference\Reference;

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
            $table->unsignedBigInteger('idUsuario');
            $table->foreign('idUsuario')->references('id')->on('users');
            $table->unsignedBigInteger('idProducto');
            $table->foreign('idProducto')->references('id')->on('productos');
            $table->double('precioUnitario');
            $table->integer('cantidad');
            $table->integer('descuento');
            $table->double('igv')->default(0.18);
            $table->double('costoEnvio');
            $table->boolean('estadoVenta');
            $table->unsignedBigInteger('idMetodoPago');
            $table->foreign('idMetodoPago')->references('id')->on('metodopago');
            $table->date('fechaPago');
            $table->date('fechaEnvio');
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
