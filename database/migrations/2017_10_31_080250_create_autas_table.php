<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAutasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('autas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('specifikacija_id');
            $table->string('naziv');
            $table->integer('cijena');
            $table->integer('godiste');
            $table->integer('kilometraza');
            $table->string('drzava');
            $table->string('grad');
            $table->string('proizvodjac');
            $table->string('model');
            $table->string('gorivo');
            $table->string('stanje');
            $table->string('naslovna_slika');
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
        Schema::dropIfExists('auta');
    }
}
