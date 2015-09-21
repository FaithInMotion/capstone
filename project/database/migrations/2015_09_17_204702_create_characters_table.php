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
            $table->string('name', 200);
            $table->integer('story_id')->unsigned();
            $table->timestamps();
        });

        Schema::table('story_characters', function($table)
        {
            $table->foreign('story_id')->references('id')->on('user_stories')->onDelete('cascade');
        });
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
