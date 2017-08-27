<?php

use Illuminate\Database\Seeder;

class SeasonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $seasons = [
            [
                'name'       => 'Temporada Otoño 2014',
                'start_date' => date('2016-01-01'),
                'end_date'   => date('2016-03-31'),
                'year'       => 2016,
            ],
            [
                'name'       => 'Temporada Invierno 2016',
                'start_date' => date('2016-04-01'),
                'end_date'   => date('2016-06-30'),
                'year'       => 2016,
            ],
            [
                'name'       => 'Temporada Primavera 2016',
                'start_date' => date('2016-07-01'),
                'end_date'   => date('2016-09-30'),
                'year'       => 2016,
            ],
            [
                'name'       => 'Temporada Otoño 2016',
                'start_date' => date('2016-10-01'),
                'end_date'   => date('2016-12-31'),
                'year'       => 2016,
            ],
        ];

        DB::table('seasons')->insert($seasons);
    }
}
