<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCharacterPhotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('character_photos');

        Schema::create('character_photos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('story_character_id')->unsigned();
            $table->string('path');
            $table->timestamps();

            $table->foreign('story_character_id')->references('id')->on('story_characters')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('character_photos');
    }
}

