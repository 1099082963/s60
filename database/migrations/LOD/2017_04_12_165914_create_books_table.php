<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books',function(Blueprint $table){
            $table->increments('id');
            $table->string('cid');
            $table->string('author_id');
            $table->string('booksName');
            $table->string('author_name');
            $table->string('price');
            $table->string('desc');
            $table->string('bookNumber');
            $table->string('collection');
            $table->string('up');
            $table->string('hot');
            $table->string('copyright');
            $table->string('label');
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
