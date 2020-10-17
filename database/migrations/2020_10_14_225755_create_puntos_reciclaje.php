<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePuntosReciclaje extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('puntos_reciclaje', function (Blueprint $table) {
            $table->id();
            $table->string('tipo_basura',100);
            $table->string('direccion',100);
            $table->string('horario_apertura',100);
            $table->string('horario_cierre',100);
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
        Schema::dropIfExists('puntos_reciclaje');
    }
}
