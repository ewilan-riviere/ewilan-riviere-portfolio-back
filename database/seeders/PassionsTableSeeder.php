<?php

namespace Database\Seeders;

use App\Models\Passion;
use Illuminate\Database\Seeder;

class PassionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Passion::insert([
            // [
            //     'name' => '',
            //     'icon' => '',
            //     'text' => ''
            // ]
            [
                'name' => 'Lecture',
                'icon' => '',
                'text' => 'La lecture',
            ],
            [
                'name' => 'Les jeux vidéo et leurs mods',
                'icon' => '',
                'text' => 'Modder les jeux vidéo',
            ],
            [
                'name' => 'Développer',
                'icon' => '',
                'text' => 'Des projets personnels ou avec des ami·es',
            ],
            [
                'name' => 'Des séries',
                'icon' => '',
                'text' => 'Chiller au coin du feu avec un chat, du thé et une bonne série',
            ],
            [
                'name' => 'Les warhammers',
                'icon' => '',
                'text' => '',
            ],
            [
                'name' => 'Les jeux de rôles',
                'icon' => '',
                'text' => '',
            ],
            [
                'name' => 'Les podcasts & sagas mp3',
                'icon' => '',
                'text' => '',
            ],
        ]);
    }
}
