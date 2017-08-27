<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableAnimeOriginalSoundtracks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('original_soundtracks', function(Blueprint $table){
            $table->increments('id');
            $table->string('name', 100);
            $table->string('artist', 100);
            $table->integer('anime_id')->unsigned();
            $table->integer('type_id')->unsigned()->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('original_soundtracks');
    }
}
