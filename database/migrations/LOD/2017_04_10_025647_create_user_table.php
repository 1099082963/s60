<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user',function(Blueprint $table){
            $table->increments('id');
            $table->string('name');
<<<<<<< HEAD
            $table->string('pwd');
        });
=======
            $table->string('password');
        });

>>>>>>> 784037bb201b203e1452e2e41ad564c437f22c5f
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
