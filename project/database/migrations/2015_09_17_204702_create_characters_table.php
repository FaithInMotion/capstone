<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCharactersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('story_characters');
        Schema::create('story_characters', function($table)
        {
            $table->increments('id');
//            $table->integer('story_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->string('name', 200);
            $table->string('description', 512);
            $table->integer('age');
            $table->string('height', 10);
            $table->integer('weight');
            $table->timestamps();
        });

        Schema::table('story_characters', function($table)
        {
//            $table->foreign('story_id')->references('id')->on('user_stories')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('story_characters');
    }
}
