<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOfferingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offerings', function (Blueprint $table) {
            $table->increments('offerno');
            $table->integer('facID')->unsigned();
            $table->integer('roomID')->unsigned();
            $table->integer('subjID')->unsigned();
            $table->string('schoolyear');
            $table->string('semester');
            $table->string('slots');


            $table->foreign('facID')->references('facID')->on('faculty');
            $table->foreign('roomID')->references('roomID')->on('rooms');
            $table->foreign('subjID')->references('subjID')->on('subjects');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}