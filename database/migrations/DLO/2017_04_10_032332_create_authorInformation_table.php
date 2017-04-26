<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAuthorInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('authorInformation',function(Blueprint $table){
            $table->increments('id');
            $table->string('sex');
            $table->string('age');
            $table->char('phone',11);
            $table->string('email');
            $table->string('birthday');
            $table->string('resume');
            $table->string('size');
            $table->string('marital');
            $table->string('habit');
            $table->string('character');
            $table->string('degree');
            $table->string('professional');
            $table->string('icon');
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
