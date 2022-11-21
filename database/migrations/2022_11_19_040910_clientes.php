<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Clientes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_cliente');
            $table->string('correo_cliente');
            $table->string('telefono_cliente');
            $table->unsignedBigInteger('id_centro');
            $table->foreign('id_centro')->references('id')->on('centro');
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
