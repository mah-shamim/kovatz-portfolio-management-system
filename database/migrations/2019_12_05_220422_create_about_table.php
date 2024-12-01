<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAboutTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->increments('about_id');
            $table->string('fname');
            $table->string('mname');
            $table->string('lname');
            $table->string('pimage');
            $table->string('uniqueid');
            $table->string('descr');
            $table->string('birthday');
            $table->string('age');
            $table->string('email');
            $table->string('interests');
            $table->string('website');
            $table->string('study');
            $table->string('twitter');
            $table->string('degree');
            $table->string('city');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('about');
    }
}
