<?php

use Illuminate\Database\Seeder;

class OstTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ost = [
            [
                'id'       => 1,
                'name'     => 'Ideal White',
                'artist'   => 'Mashiro Ayano',
                'anime_id' => 1,
                'type_id'  => 1,
            ],
            [
                'id'       => 2,
                'name'     => 'Believe',
                'artist'   => 'Kalafina',
                'anime_id' => 1,
                'type_id'  => 2,
            ],
        ];

        DB::table('original_soundtracks')->insert($ost);
    }
}
