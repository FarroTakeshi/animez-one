<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFkCharacterIdSeiyuuIdToCharactersXSeiyuusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('characters_x_seiyuus', function(Blueprint $table) {
            $table->foreign('character_id')
                ->references('id')
                ->on('characters')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });

        Schema::table('characters_x_seiyuus', function(Blueprint $table) {
            $table->foreign('seiyuu_id')
                ->references('id')
                ->on('seiyuus')
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
        Schema::table('characters_x_seiyuus', function(Blueprint $table) {
            $table->dropForeign('characters_x_seiyuus_character_id_foreign');
        });

        Schema::table('characters_x_seiyuus', function(Blueprint $table) {
            $table->dropForeign('characters_x_seiyuus_seiyuu_id_foreign');
        });
    }
}
