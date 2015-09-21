<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSceneryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('story_scenery');
        Schema::create('story_scenery', function($table)
        {
            $table->increments('id');
//            $table->integer('story_id')->unsigned();
            $table->string('name', 200);
            $table->string('description', 255);
            $table->timestamps();
        });

//        Schema::table('story_scenery', function($table)
//        {
//            $table->foreign('story_id')->references('id')->on('user_stories')->onDelete('cascade');
//        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('story_scenery');
    }
}
