<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableAnimes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animes', function(Blueprint $table){
            $table->increments('id');
            $table->string('name', 100);
            $table->string('img', 100)->nullable();
            $table->string('img_path', 100)->nullable();
            $table->string('synopsis', 1000);
            $table->double('valuation', 4, 2)->default(0);
            $table->integer('season_id')->unsigned()->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('animes');
    }
}
