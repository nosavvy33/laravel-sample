<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TablaCanciones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('canciones', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo')->nullable()->change();
            $table->string('imagen')->nullable()->change();
            $table->smallInteger('anio');
            $table->integer('albumes_id')->unsigned();
            $table->foreign('albumes_id')
                ->references('id')->on('albumes')->onDelete('cascade');
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
        Schema::dropIfExists('canciones');
    }
}
