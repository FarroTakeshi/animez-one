<?php

use Illuminate\Database\Seeder;

class GenresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $genres = [
            ['id' => 1, 'name' => 'Comedy'],
            ['id' => 2, 'name' => 'Romance'],
            ['id' => 3, 'name' => 'Shounen'],
            ['id' => 4, 'name' => 'Seinen'],
            ['id' => 5, 'name' => 'Shoujo'],
            ['id' => 6, 'name' => 'Drama'],
            ['id' => 7, 'name' => 'Ecchi'],
            ['id' => 8, 'name' => 'Fantasy'],
            ['id' => 9, 'name' => 'Action'],
            ['id' => 10, 'name' => 'Adventure'],
            ['id' => 11, 'name' => 'Mechas'],
            ['id' => 12, 'name' => 'Magic'],
            ['id' => 13, 'name' => 'Music'],
            ['id' => 14, 'name' => 'School'],
            ['id' => 15, 'name' => 'Slice of life'],
            ['id' => 16, 'name' => 'Sport'],
        ];

        DB::table('anime_genres')->insert($genres);
    }
}
