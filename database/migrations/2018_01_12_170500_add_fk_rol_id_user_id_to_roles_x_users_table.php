<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFkRolIdUserIdToRolesXUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('roles_x_users', function(Blueprint $table){
            $table->foreign('role_id')
                ->references('id')
                ->on('roles')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
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
        Schema::table('roles_x_users', function(Blueprint $table){
            $table->dropForeign('roles_x_users_role_id_foreign');
        });

        Schema::table('roles_x_users', function(Blueprint $table){
            $table->dropForeign('roles_x_users_user_id_foreign');
        });
    }
}
