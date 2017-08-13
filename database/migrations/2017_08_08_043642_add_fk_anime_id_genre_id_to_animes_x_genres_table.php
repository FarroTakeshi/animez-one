<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFkAnimeIdGenreIdToAnimesXGenresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('animes_x_genres', function(Blueprint $table){
            $table->foreign('anime_id')
                ->references('id')
                ->on('animes')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('genre_id')
                ->references('id')
                ->on('anime_genres')
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
        Schema::table('animes_x_genres', function(Blueprint $table){
            $table->dropForeign('animes_x_genres_anime_id_foreign');
        });

        Schema::table('animes_x_genres', function(Blueprint $table){
            $table->dropForeign('animes_x_genres_genre_id_foreign');
        });
    }
}
