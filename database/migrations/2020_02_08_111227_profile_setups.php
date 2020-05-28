<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProfileSetups extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profile_setups',function (Blueprint $table){
            $table->increments('id');
            $table->integer('main_id')->unsigned();
            $table->foreign('main_id')->references('id')->on('main_registraions')->onDelete('cascade');
            $table->string('clg_name')->nullable();
            $table->string('year')->nullable();
            $table->string('stream')->nullable();
            $table->string('type')->nullable(); 
            $table->string('exprience')->nullable();
            $table->string('jobprofile')->nullable();
            $table->string('standard_from')->nullable();
            $table->string('standard_to')->nullable(); 
            $table->string('subjects')->nullable();
            $table->string('board_university')->nullable();
            $table->string('coaching_options')->nullable();
            $table->string('facilities_infrastrcture')->nullable();
            $table->string('website')->nullable();
            $table->string('facebook')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('google')->nullable();
            $table->string('twitter')->nullable();
            $table->string('instgram')->nullable();
            $table->string('youtube')->nullable();
            $table->string('business_card')->nullable();
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
        Schema::dropIfExists('profile_setups');
    }
}
