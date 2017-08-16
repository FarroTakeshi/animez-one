<?php

use Illuminate\Database\Seeder;

class AnimesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $animes = [
            [
                'name'     => 'Fate/Unlimited Blade Works',
                'img'      => 'img',
                'synopsis' => 'Cada 10 años se lleva a cabo el ritual conocido como la Guerra del Santo Grial en la ciudad de Fuyuki. La historia se centra en Tohsaka Rin y su servant Archer quienes terminan relacionandose con Emiya Shirou, un compañero de Rin que ha sido elegido como master para participar también.',
                'valuation' => 5,
                'season_id' => 1,
            ],
            [
                'name'     => 'Boku dake ga Inai Machi',
                'img'      => 'img',
                'synopsis' => 'Cuenta la historia de Satoru, un joven que posee la habilidad denominada "Revival" que le permite regresar un minuto en el tiempo. Cuando un asesinato a un ser querido se realiza siendo él inculpado, logra regresar 10 años en el tiempo.',
                'valuation' => 3.5,
                'season_id' => 2,
            ],
            [
                'name'     => 'Kono Subarashii Sekai ni Shukufuku wo!',
                'img'      => 'img',
                'synopsis' => 'Después de un inútil y patético intento de salvar a una chica, a Satou Kazuma se le da la opción de reencarnar en un mundo de fantasía cuyo objetivo será derrotar al Rey Demonio. Poco sabía que no resultaría como lo esperaba.',
                'valuation' => 5,
                'season_id' => 2,
            ],
            [
                'name'     => 'Re:Zero kara Hajimeru Isekai Seikatsu',
                'img'      => 'img',
                'synopsis' => 'Natsuki Subaru se encontraba comprando en una tienda cuando es transportado a un mundo de fantasía. Ahí conoce a una chica mitad elfa de nombre Satella. Debido a ciertas circunstancias, ambos mueren y Subaru se da cuenta que puede de regresar en el tiempo a un punto anterior a lo ocurrido.',
                'valuation' => 4,
                'season_id' => 3,
            ],
        ];

        DB::table('animes')->insert($animes);
    }
}
