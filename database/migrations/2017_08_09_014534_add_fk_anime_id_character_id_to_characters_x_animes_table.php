<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFkAnimeIdCharacterIdToCharactersXAnimesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('characters_x_animes', function(Blueprint $table) {
            $table->foreign('character_id')
                ->references('id')
                ->on('characters')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });

        Schema::table('characters_x_animes', function(Blueprint $table) {
            $table->foreign('anime_id')
                ->references('id')
                ->on('animes')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('characters_x_animes', function(Blueprint $table){
            $table->dropForeign('characters_x_animes_character_id_foreign');
        });

        Schema::table('characters_x_animes', function(Blueprint $table){
            $table->dropForeign('characters_x_animes_anime_id_foreign');
        });
    }
}
