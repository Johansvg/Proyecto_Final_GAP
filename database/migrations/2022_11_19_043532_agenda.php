<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Agenda extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('agenda', function (Blueprint $table) {
            $table->id();
            $table->date('fecha_agenda');
            $table->time('hora_agenda');
            $table->unsignedBigInteger('id_cliente');
            $table->unsignedBigInteger('id_servicio');
            $table->foreign('id_cliente')->references('id')->on('clientes');
            $table->foreign('id_servicio')->references('id')->on('servicios');
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
