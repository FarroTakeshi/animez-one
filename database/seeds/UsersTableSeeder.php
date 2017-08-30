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
                'username'   => 'Admin',
                'first_name' => 'Admin',
                'last_name'  => 'Admin',
                'email'      => 'admin@admin.com',
                'password'   => Hash::make('secret'),
            ],
        ];

        DB::table('users')->insert($users);
    }
}
