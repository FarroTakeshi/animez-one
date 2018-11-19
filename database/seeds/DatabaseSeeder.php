<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(SeasonsTableSeeder::class);
        $this->call(GenresTableSeeder::class);
        $this->call(OstTypesTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(RolesUsersTableSeeder::class);
        $this->call(PermissionsTableSeeder::class);
        $this->call(RolesPermissionsTableSeeder::class);
    }
}
