<?php

use Illuminate\Database\Seeder;

class OstTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ost_types = [
            ['id' => 1, 'name' => 'Opening'],
            ['id' => 2, 'name' => 'Ending'],
        ];

        DB::table('ost_types')->insert($ost_types);
    }
}
