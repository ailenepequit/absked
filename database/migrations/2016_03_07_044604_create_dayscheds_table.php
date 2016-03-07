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
            $table->integer('daycode')->unsigned();
            $table->integer('offerno')->unsigned();            
            $table->time('lect_start');
            $table->time('lect_end');
            $table->time('lab_start');
            $table->time('lab_end');

            $table->foreign('daycode')->references('daycode')->on('days');
            $table->foreign('offerno')->references('offerno')->on('offerings');
            $table->primary(array('daycode', 'offerno'));
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