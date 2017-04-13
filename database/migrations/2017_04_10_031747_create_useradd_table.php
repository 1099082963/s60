<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUseraddTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('userInformation',function(Blueprint $table){
            $table->string('phone');
            $table->string('size');
            $table->string('marital');
            $table->string('habit');
            $table->string('character');
            $table->string('degree');
            $table->string('professional');
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
