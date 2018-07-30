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
            [
                'username'   => 'Otaku1',
                'first_name' => 'Takeshi',
                'last_name'  => 'Farro',
                'email'      => 'takesansw12@gmail.com',
                'password'   => Hash::make('1234'),
            ],
        ];

        DB::table('users')->insert($users);
    }
}
