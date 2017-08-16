<?php

use Illuminate\Database\Seeder;

class ChaptersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $chapters = [
            [
                'number'   => 0,
                'name'     => 'Prologue',
                'anime_id' => 1,
            ],
            [
                'number'   => 1,
                'name'     => 'Winter Day, Fateful Night',
                'anime_id' => 1,
            ],
            [
                'number'   => 2,
                'name'     => 'When the Curtain Goes Up',
                'anime_id' => 1,
            ],
            [
                'number'   => 3,
                'name'     => 'The First Battle',
                'anime_id' => 1,
            ],
            [
                'number'   => 1,
                'name'     => 'Flashing Before My Eyes',
                'anime_id' => 2,
            ],
            [
                'number'   => 2,
                'name'     => 'Palm of the Hand',
                'anime_id' => 2,
            ],
            [
                'number'   => 3,
                'name'     => 'Birthmark',
                'anime_id' => 2,
            ],
            [
                'number'   => 1,
                'name'     => 'This Self Proclaimed Goddess and Reincarnation in Another World!',
                'anime_id' => 3,
            ],
            [
                'number'   => 2,
                'name'     => 'An Explosion for This Chuunibyo!',
                'anime_id' => 3,
            ],
            [
                'number'   => 3,
                'name'     => 'A Panty Treasure in This Right Hand!',
                'anime_id' => 3,
            ],
            [
                'number'   => 1,
                'name'     => 'The End of the Beginning and the Beginning of the End',
                'anime_id' => 4,
            ],
            [
                'number'   => 2,
                'name'     => 'Reunion with the Witch',
                'anime_id' => 4,
            ],
            [
                'number'   => 3,
                'name'     => 'Starting Life from Zero in Another World',
                'anime_id' => 4,
            ],
        ];

        DB::table('chapters')->insert($chapters);
    }
}
