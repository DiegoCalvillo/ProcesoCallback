<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReportes1sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reportes1s', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('sare');
            $table->integer('asesor_id');
            $table->integer('asesor_encuesta_id');
            $table->date('fecha_encuesta');
            $table->time('hora_encuesta');
            $table->integer('motivo');
            $table->integer('supervisor_id');
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
        Schema::dropIfExists('reportes1s');
    }
}
