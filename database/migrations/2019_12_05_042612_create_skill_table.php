<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSkillTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skills', function (Blueprint $table) {
            $table->increments('id');
            $table->string('uniqueid')->unique();
            $table->integer('css');
            $table->integer('javascript');
            $table->integer('wordpress');
            $table->integer('php');
            $table->integer('jquery');
            $table->integer('mysql');
            $table->integer('angular');
            $table->integer('html');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('skill');
    }
}
