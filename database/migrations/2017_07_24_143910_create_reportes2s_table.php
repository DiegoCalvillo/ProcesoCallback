<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReportes2sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reportes2s', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('categoria_id');
            $table->integer('sub_categoria_id');
            $table->integer('comportamiento_id');
            $table->integer('score_nps');
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
        Schema::dropIfExists('reportes2s');
    }
}
