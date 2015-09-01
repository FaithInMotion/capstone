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
        \Illuminate\Support\Facades\Schema::dropIfExists('story_characters');
        \Illuminate\Support\Facades\Schema::create('story_characters', function($table)
        {
            $table->increments('id');
            $table->integer('story_id');
            $table->foreign('story_id')->references('id')->on('user_stories');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        \Illuminate\Support\Facades\Schema::dropIfExists('story_characters');
    }
}
