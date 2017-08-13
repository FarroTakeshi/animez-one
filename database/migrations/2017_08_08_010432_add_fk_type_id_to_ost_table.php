<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFkTypeIdToOstTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('original_soundtracks', function(Blueprint $table) {
            $table->foreign('type_id')
                ->references('id')
                ->on('ost_types')
                ->onDelete('set null')
                ->onUpdate('set null');
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
            $table->dropForeign('original_soundtracks_type_id_foreign');
        });
    }
}
