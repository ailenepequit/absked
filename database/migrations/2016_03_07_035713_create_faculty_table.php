<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFacultyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faculty', function (Blueprint $table) {
            $table->increments('facID');
            $table->string('fname');
            $table->string('mname');
            $table->string('lname');
            $table->string('gender');
            $table->date('bday');
            $table->string('phone');
            $table->string('address');
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
