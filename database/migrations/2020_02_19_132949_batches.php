<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Batches extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('batches',function (Blueprint $table){
            $table->increments('id');
            $table->integer('main_id')->unsigned();
            $table->foreign('main_id')->references('id')->on('main_registraions')->onDelete('cascade');
            $table->string('batch_name');
            $table->integer('course_id')->unsigned();
            $table->foreign('course_id')->references('id')->on('courses')->onDelete('cascade');
            $table->string('maximum_strength');
            $table->string('option_name');
            $table->string('starting_month');
            $table->string('starting_year');
            $table->string('batch_time');
            $table->boolean('status')->default(1);
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
        Schema::dropIfExists('batches');
    }
}
