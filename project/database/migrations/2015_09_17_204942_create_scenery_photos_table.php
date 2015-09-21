<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSceneryPhotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('scenery_photos');

        Schema::create('scenery_photos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('scenery_id')->unsigned();
            $table->string('photo');
            $table->timestamps();

            $table->foreign('scenery_id')->references('id')->on('story_scenery')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('scenery_photos');
    }
}
