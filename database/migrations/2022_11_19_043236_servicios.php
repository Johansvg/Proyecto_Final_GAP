<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Servicios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('servicios', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_servicio');
            $table->string('descripcion_servicio');
            $table->string('tiempo_servicio');
            $table->string('precio_servicio');
            $table->unsignedBigInteger('id_centro');
            $table->unsignedBigInteger('id_empleado');
            $table->foreign('id_centro')->references('id')->on('centro');
            $table->foreign('id_empleado')->references('id')->on('empleados');
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
