<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFkRoleIdPermissionIdToRolesXPermissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('roles_x_permissions', function(Blueprint $table){
            $table->foreign('role_id')
                ->references('id')
                ->on('roles')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('permission_id')
                ->references('id')
                ->on('permissions')
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
        Schema::table('roles_x_permissions', function(Blueprint $table){
            $table->dropForeign('roles_x_permissions_role_id_foreign');
        });

        Schema::table('roles_x_permissions', function(Blueprint $table){
            $table->dropForeign('roles_x_permissions_permission_id_foreign');
        });
    }
}
