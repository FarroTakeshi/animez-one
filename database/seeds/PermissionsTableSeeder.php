<?php

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            ['id' => 1, 'permission_name' => 'view_roles', 'description' => 'ver los roles'],
            ['id' => 2, 'permission_name' => 'create_roles', 'description' => 'creacion de nuevos roles'],
            ['id' => 3, 'permission_name' => 'edit_roles', 'description' => 'actualizacion de datos del rol'],
            ['id' => 4, 'permission_name' => 'delete_roles', 'description' => 'eliminacion del rol'],
            ['id' => 5, 'permission_name' => 'view_users', 'description' => 'ver usuarios'],
            ['id' => 6, 'permission_name' => 'create_users', 'description' => 'creacion de nuevos del usuarios'],
            ['id' => 7, 'permission_name' => 'edit_users', 'description' => 'actualizacion de datos del usuario'],
            ['id' => 8, 'permission_name' => 'delete_users', 'description' => 'eliminacion del usuario'],
            ['id' => 9, 'permission_name' => 'inactivate_users', 'description' => 'desactivacion de usuario'],
        ];

        DB::table('permissions')->insert($permissions);
    }
}
