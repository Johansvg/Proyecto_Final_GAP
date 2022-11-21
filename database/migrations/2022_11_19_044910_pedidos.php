<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Pedidos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id();
            $table->string('direccion_pedido');
            $table->string('fecha_pedido');
            $table->string('valor_total');
            $table->unsignedBigInteger('id_cliente');
            $table->unsignedBigInteger('id_producto');
            $table->foreign('id_cliente')->references('id')->on('clientes');
            $table->foreign('id_producto')->references('id')->on('productos');
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
