<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Almacen extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('almacen', function (Blueprint $table) {
            $table->id();
            $table->string('descripcion_almacen');
            $table->unsignedBigInteger('id_centro');
            $table->unsignedBigInteger('id_producto');
            $table->foreign('id_centro')->references('id')->on('centro');
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
