<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userInformation',function(Blueprint $table){
            $table->increments('id');
            $table->string('uid');
            $table->string('age');
            $table->string('sex');
            $table->string('birthday');
            $table->string('resume');
            $table->string('email');
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
