<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpecifikacijasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('specifikacijas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('prenos');
            $table->string('kapacitet_goriva');
            $table->string('potrosnja');
            $table->integer('broj_vrata');
            $table->integer('broj_sjedista');
            $table->string('pogon');
            $table->string('eksterijer');
            $table->string('enterijer');
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
        Schema::dropIfExists('specifikacije');
    }
}
