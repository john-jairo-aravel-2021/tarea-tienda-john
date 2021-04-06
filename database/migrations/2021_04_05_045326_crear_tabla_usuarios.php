<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaUsuarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->charset='utf8mb4';
            $table->id();
            $table->timestamps();
            $table->string('nombre');
            $table->bigInteger('cedula')->nullable();
            $table->string('lugar_tienda');
            $table->date('fecha_venta');
            $table->bigInteger('telefono')->nullable();

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
