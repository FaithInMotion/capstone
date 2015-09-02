<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContributorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('story_contributors');
        Schema::create('story_contributors', function($table)
        {
            $table->increments('id');
            $table->integer('story_id')->unsigned();
            $table->timestamps();
        });

        Schema::table('story_contributors', function($table)
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
        Schema::dropIfExists('story_contributors');
    }
}
