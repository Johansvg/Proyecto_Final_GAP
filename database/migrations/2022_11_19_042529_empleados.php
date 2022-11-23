<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Empleados extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('empleados', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_empleado');
            $table->string('telefono_empleado');
            $table->unsignedBigInteger('id_centro');
            $table->unsignedBigInteger('id_cargo');
            $table->foreign('id_centro')->references('id')->on('centro');
            $table->foreign('id_cargo')->references('id')->on('cargo');
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
