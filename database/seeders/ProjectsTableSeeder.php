<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Project::insert([
            [
                'title'         => 'Zergling Evolution',
                'order'         => 8,
                'image'         => 'storage/projects/zergling-evolution.png',
                'image-title'   => 'storage/projects/zergling-evolution-title.png',
                'resume'        => 'Aidez Ling, le Zergling, à manger de vilains Terrans pour gagner des points dans ce jeu adapté du célèbre Cookie Clicker ! Collectionnez les bonus organiques proposés par Abathur !',
                'github_link'   => 'https://github.com/ewilan-riviere/zergling-evolution',
                'try_it'        => null,
                'font'          => 'storage/fonts/starcraft-normal.ttf',
                'is_collective' => false,
                'created_at'    => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at'    => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'title'         => 'Overwatch Memory',
                'order'         => 4,
                'image'         => 'storage/projects/overwatch-memory.png',
                'image-title'   => 'storage/projects/overwatch-memory-title.png',
                'resume'        => 'Retrouvez vos héros favoris dans ce jeu de Memory basé sur l\'univers d\'Overwatch, battez des records pour retrouver toutes les cartes !',
                'github_link'   => 'https://github.com/ewilan-riviere/overwatch-memory',
                'try_it'        => null,
                'font'          => 'storage/fonts/big-noodle-titling.ttf',
                'is_collective' => false,
                'created_at'    => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at'    => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'title'         => 'Pomodoro',
                'order'         => 6,
                'image'         => 'storage/projects/pomodoro.png',
                'image-title'   => 'storage/projects/pomodoro-title.png',
                'resume'        => 'Travaillez en toute sérénité en prenant soin de vous reposer de façon régulière grâce à ce mignon petit minuteur qui vous aidera à maîtriser votre temps en douceur.',
                'github_link'   => 'https://github.com/ewilan-riviere/pomodoro',
                'try_it'        => null,
                'font'          => 'storage/fonts/permanent-marker-regular.ttf',
                'is_collective' => false,
                'created_at'    => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at'    => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'title'         => 'Quizz Pokémon',
                'order'         => 5,
                'image'         => 'storage/projects/quizz-pokemon.png',
                'image-title'   => 'storage/projects/quizz-pokemon-title.png',
                'resume'        => 'Traversez les épreuves de ce quiz pokémon qui vous interrogera sur les subtilités de cette licence vidéoludique, autant sur les jeu que les animes.',
                'github_link'   => 'https://github.com/ewilan-riviere/quizz-pokemon',
                'try_it'        => null,
                'font'          => 'storage/fonts/pokemon-solid.ttf',
                'is_collective' => false,
                'created_at'    => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at'    => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'title'         => 'Fantasy Battle',
                'order'         => 7,
                'image'         => 'storage/projects/fantasy-battle.png',
                'image-title'   => 'storage/projects/fantasy-battle-title.png',
                'resume'        => 'Combattez avec les personnages tirés de célèbres licences de jeu vidéo.',
                'github_link'   => 'https://github.com/ewilan-riviere/fantasy-battle',
                'try_it'        => null,
                'font'          => 'storage/fonts/triforce.ttf',
                'is_collective' => false,
                'created_at'    => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at'    => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'title'         => './play.it',
                'order'         => 2,
                'image'         => 'storage/projects/play.it.png',
                'image-title'   => null,
                'resume'        => 'Refonte du sstorage/fonts/ite de ./play.it, projet permettant de jouer facilement aux jeux vidéo sous Linux.',
                'github_link'   => 'https://forge.dotslashplay.it/play.it/website',
                'try_it'        => 'https://dev.website.dotslashplay.it/',
                'font'          => 'storage/fonts/source-code-pro-regular.ttf',
                'is_collective' => false,
                'created_at'    => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at'    => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'title'         => 'Promo #03 · Code Académie',
                'order'         => 3,
                'image'         => 'storage/projects/code-academie.png',
                'image-title'   => null,
                'resume'        => 'Création du site de la promo #03 de la Code Académie avec une équipe de passionnés.',
                'github_link'   => 'https://gitlab.com/code-academie/promo-03/apprenants/site-promo-3',
                'try_it'        => 'http://promo03.code-academie.fr/',
                'font'          => 'storage/fonts/kraftstoff-regular.otf',
                'is_collective' => false,
                'created_at'    => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at'    => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'title'         => 'Portfolio',
                'order'         => 1,
                'image'         => 'storage/projects/portfolio.png',
                'image-title'   => null,
                'resume'        => 'Réalisation de mon portfolio.',
                'github_link'   => 'https://github.com/ewilan-riviere/ewilan-riviere-portfolio-front',
                'try_it'        => 'https://portfolio.ewilan-riviere.com/',
                'font'          => 'storage/fonts/morpheus.ttf',
                'is_collective' => false,
                'created_at'    => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at'    => Carbon::now()->format('Y-m-d H:i:s'),
            ],
        ]);
    }
}