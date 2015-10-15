<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('user_stories');
        Schema::create('user_stories', function($table)
        {
//          $table->integer('user_id')->unsigned();
            $table->increments('id')->unsigned();
            $table->string('title', 200);
            $table->string('genre', 200);
            $table->string('synopsis', 1024);
            $table->timestamps();
        });

//        Schema::table('user_stories', function($table)
//        {
//            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
//        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_stories');
    }
}
