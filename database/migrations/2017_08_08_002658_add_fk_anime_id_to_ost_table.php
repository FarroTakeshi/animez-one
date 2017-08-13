<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFkAnimeIdToOstTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('original_soundtracks', function(Blueprint $table) {
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
        Schema::table('original_soundtracks', function (Blueprint $table) {
            $table->dropForeign('original_soundtracks_anime_id_foreign');
        });
    }
}
