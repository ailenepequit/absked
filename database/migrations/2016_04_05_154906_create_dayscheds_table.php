<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDaySchedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dayscheds', function (Blueprint $table) {
            $table->integer('offerno')->unsigned();
            $table->integer('daycode')->unsigned();         
            $table->time('start_time');
            $table->time('end_time');

            $table->foreign('daycode')->references('daycode')->on('days');
            $table->foreign('offerno')->references('offerno')->on('offerings');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('dayscheds');
    }
}