<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name'  => 'Admin',
                'email' => 'admin@admin.com',
                'password' => Hash::make('secret'),
            ],
        ];

        DB::table('users')->insert($users);
    }
}
