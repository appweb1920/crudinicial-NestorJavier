<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePuntosreciclajeRecolectoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('puntosreciclaje_recolectores', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('puntosreciclaje_id')->unsigned();
            $table->bigInteger('recolectores_id')->unsigned();
            $table->timestamps();

            $table->foreign('puntosreciclaje_id')->references('id')->on('puntos_reciclaje')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('recolectores_id')->references('id')->on('recolectores')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('puntosreciclaje_recolectores');
    }
}
