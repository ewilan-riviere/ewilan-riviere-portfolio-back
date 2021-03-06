<?php

namespace Database\Seeders;

use File;
use Carbon\Carbon;
use App\Models\Project;
use App\Models\Formation;
use App\Models\ProjectLink;
use Illuminate\Database\Seeder;
use App\Models\Enums\ProjectLinkType;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $school = [
            [
                'title'                        => 'Zergling Evolution',
                'order'                        => 8,
                'image'                        => 'zergling-evolution.webp',
                'image_title'                  => 'zergling-evolution.webp',
                'description'                  => 'Aidez Ling, le Zergling, à manger de vilains Terrans pour gagner des points dans ce jeu adapté du célèbre Cookie Clicker ! Collectionnez les bonus organiques proposés par Abathur !',
                // 'link_repository'          => 'https://github.com/ewilan-riviere/zergling-evolution',
                // 'link_project'             => null,
                'font'                         => 'media/fonts/starcraft-normal.ttf',
                'formation_slug'               => 'developpeuse-web-web-mobile',
                'is_favorite'                  => false,
                'is_display'                   => false,
                'created_at'                   => '2018-11-07',
                'updated_at'                   => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'title'                        => 'Overwatch Memory',
                'order'                        => 4,
                'image'                        => 'overwatch-memory.webp',
                'image_title'                  => 'overwatch-memory.webp',
                'description'                  => 'Retrouvez vos héros favoris dans ce jeu de Memory basé sur l\'univers d\'Overwatch, battez des records pour retrouver toutes les cartes !',
                // 'link_repository'          => 'https://github.com/ewilan-riviere/overwatch-memory',
                // 'link_project'             => null,
                'font'                         => 'media/fonts/big-noodle-titling.ttf',
                'is_favorite'                  => true,
                'is_display'                   => true,
                'formation_slug'               => 'developpeuse-web-web-mobile',
                'created_at'                   => '2018-11-07',
                'updated_at'                   => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'title'                        => 'Pomodoro',
                'order'                        => 6,
                'image'                        => 'pomodoro.webp',
                'image_title'                  => 'pomodoro.webp',
                'description'                  => 'Travaillez en toute sérénité en prenant soin de vous reposer de façon régulière grâce à ce mignon petit minuteur qui vous aidera à maîtriser votre temps en douceur.',
                // 'link_repository'          => 'https://github.com/ewilan-riviere/pomodoro',
                // 'link_project'             => null,
                'font'                         => 'media/fonts/permanent-marker-regular.ttf',
                'is_favorite'                  => false,
                'is_display'                   => true,
                'formation_slug'               => 'developpeuse-web-web-mobile',
                'created_at'                   => '2018-11-28',
                'updated_at'                   => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'title'                        => 'Quizz Pokémon',
                'order'                        => 5,
                'image'                        => 'quizz-pokemon.webp',
                'image_title'                  => 'quizz-pokemon.webp',
                'description'                  => 'Traversez les épreuves de ce quiz pokémon qui vous interrogera sur les subtilités de cette licence vidéoludique, autant sur les jeu que les animes.',
                // 'link_repository'          => 'https://github.com/ewilan-riviere/quizz-pokemon',
                // 'link_project'             => null,
                'font'                         => 'media/fonts/pokemon-solid.ttf',
                'is_favorite'                  => false,
                'is_display'                   => true,
                'formation_slug'               => 'developpeuse-web-web-mobile',
                'created_at'                   => '2018-12-06',
                'updated_at'                   => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            // [
            //     'title'                    => 'Fantasy Battle',
            //     'order'                    => 7,
            //     'image'                    => 'fantasy-battle.webp',
            //     'image_title'              => 'fantasy-battle-title.webp',
            //     'extract'                  => 'Combattez avec les personnages tirés de célèbres licences de jeu vidéo.',
            //     'description'              => null,
            //     // 'link_repository'          => 'https://github.com/ewilan-riviere/fantasy-battle',
            //     // 'link_project'             => null,
            //     'font'                     => 'media/fonts/triforce.ttf',
            //     'formation_slug'           => 'developpeuse-web-web-mobile',
            //     'created_at'               => '2019-02-07',
            //     'updated_at'               => Carbon::now()->format('Y-m-d H:i:s'),
            // ],
            [
                'title'                        => 'Site web de ./play.it',
                'order'                        => 2,
                'image'                        => 'play-it.webp',
                'image_title'                  => null,
                'description'                  => 'Refonte du site de ./play.it, projet permettant de jouer facilement aux jeux vidéo sous Linux.',
                // 'link_repository'          => 'https://forge.dotslashplay.it/play.it/website',
                // 'link_project'             => 'https://dev.website.dotslashplay.it/',
                'font'                         => 'media/fonts/source-code-pro-regular.ttf',
                'is_favorite'                  => true,
                'is_display'                   => true,
                'formation_slug'               => 'developpeuse-web-web-mobile',
                'created_at'                   => '2019-04-01',
                'updated_at'                   => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'title'                        => 'Promo #03 · Code Académie',
                'order'                        => 3,
                'image'                        => 'code-academie.webp',
                'image_title'                  => null,
                'description'                  => 'Création du site de la promo #03 de la Code Académie avec une équipe de passionnés.',
                // 'link_repository'          => 'https://gitlab.com/code-academie/promo-03/apprenants/site-promo-3',
                // 'link_project'             => 'http://promo03.code-academie.fr/',
                'font'                         => 'media/fonts/kraftstoff-regular.otf',
                'is_favorite'                  => true,
                'is_display'                   => true,
                'formation_slug'               => 'developpeuse-web-web-mobile',
                'created_at'                   => '2018-11-27',
                'updated_at'                   => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'title'                => 'TER sur la cyberviolence',
                'order'                => 1,
                'image'                => 'ter-la-cyberviolence.webp',
                'image_title'          => null,
                'description'          => "Ce travail avait pour but de retracer les violences qui peuvent survenir dans le domaine numérique, les formes différentes qu'elles peuvent prendre par rapport aux violences du monde physique. L'accent a été mis sur la cyberviolence subie en milieu scolaire et la manière dont elle prend le relais sur la violence classique.<br/>Ce sujet m'intéressait parce que la violence en milieu scolaire est un sujet qui a une grande importance pour moi et je souhaitais étudier la manière dont les nouvelles technologies avaient affecté ce problème, en bien comme en mal. La conclusion de ce travail d'étude et de recherche a été éclairante et enrichissante.",
                // 'link_project'         => getPath('media/documents/ter-la-cyberviolence.pdf'),
                'is_favorite'              => false,
                'is_display'               => true,
                'formation_slug'           => 'licence-de-psychologie',
                'created_at'               => '2014-06-01',
                'updated_at'               => Carbon::now()->format('Y-m-d H:i:s'),
            ],
        ];

        $personal = [
            [
                'title'                            => 'Portfolio',
                'order'                            => 1,
                'image'                            => 'portfolio.webp',
                'image_title'                      => null,
                'description'                      => 'Réalisation de mon portfolio.',
                'font'                             => 'media/fonts/morpheus.ttf',
                'is_favorite'                      => true,
                'is_display'                       => true,
                'formation_slug'                   => 'personnel',
                'created_at'                       => '2020-05-19',
                'updated_at'                       => Carbon::now()->format('Y-m-d H:i:s'),
                'links'                            => [
                    'back' => [
                        'repository'          => 'https://github.com/ewilan-riviere/portfolio-back',
                        'project'             => 'https://ewilan-riviere.com/api/documentation',
                    ],
                    'front' => [
                        'repository'          => 'https://github.com/ewilan-riviere/portfolio-front',
                        'project'             => 'https://ewilan-riviere.com',
                    ],
                ],
            ],
            // [
            //     'title'                    => 'Storm',
            //     // 'order'                    => 1,
            //     'image'                    => 'storm.webp',
            //     'image_title'              => null,
            //     // 'extract'                  => '',
            //     'description'              => null,
            // 'link_repository'          => '',
            // 'link_project'             => '',
            //     // 'font'                     => 'media/fonts/morpheus.ttf',
            // 'is_favorite'              => false,
            // 'is_display'                   => true,
            //     'formation_slug'           => 'personnel',
            //     'created_at'               => '2020-11-28',
            //     // 'updated_at'               => Carbon::now()->format('Y-m-d H:i:s'),
            // ],
            // [
            //     'title'                    => 'PokéDroid',
            //     // 'order'                    => 1,
            //     'image'                    => 'pokedroid.webp',
            //     'image_title'              => null,
            //     // 'extract'                  => '',
            //     'description'              => null,
            // 'link_repository'          => '',
            // 'link_project'             => '',
            //     // 'font'                     => 'media/fonts/morpheus.ttf',
            // 'is_favorite'              => false,
            // 'is_display'                   => true,
            //     'formation_slug'           => 'personnel',
            //     'created_at'               => '2020-11-27',
            //     // 'updated_at'               => Carbon::now()->format('Y-m-d H:i:s'),
            // ],
            [
                'title'                    => 'Fanfic',
                // 'order'                    => 1,
                // 'image'                    => 'portfolio.webp',
                'image_title'              => null,
                // 'extract'                  => '',
                'description'              => null,
                // 'link_repository'          => '',
                // 'link_project'             => '',
                // 'font'                     => 'media/fonts/morpheus.ttf',
                'is_favorite'                  => false,
                'is_display'                   => false,
                'formation_slug'               => 'personnel',
                'created_at'                   => '2020-11-20',
                // 'updated_at'               => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'title'                    => 'Skyscale',
                // 'order'                    => 1,
                'image'                    => 'skyscale.webp',
                'image_title'              => null,
                // 'extract'                  => '',
                'description'              => null,
                // 'link_repository'          => '',
                // 'link_project'             => '',
                // 'font'                     => 'media/fonts/morpheus.ttf',
                'is_favorite'                  => false,
                'is_display'                   => true,
                'formation_slug'               => 'personnel',
                'created_at'                   => '2020-10-30',
                // 'updated_at'               => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'title'                    => 'Roazhon Star',
                // 'order'                    => 1,
                'image'                    => 'roazhon-star.webp',
                'image_title'              => null,
                // 'extract'                  => '',
                'description'              => null,
                // 'link_repository'          => '',
                // 'link_project'             => '',
                // 'font'                     => 'media/fonts/morpheus.ttf',
                'is_favorite'                  => false,
                'is_display'                   => true,
                'formation_slug'               => 'personnel',
                'created_at'                   => '2020-10-24',
                // 'updated_at'               => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'title'                    => 'Bookshelves',
                // 'order'                    => 1,
                'image'                    => 'bookshelves.webp',
                'image_title'              => null,
                // 'extract'                  => '',
                'description'              => null,
                // 'link_repository'          => '',
                // 'link_project'             => '',
                // 'font'                     => 'media/fonts/morpheus.ttf',
                'is_favorite'                  => true,
                'is_display'                   => true,
                'formation_slug'               => 'personnel',
                'created_at'                   => '2021-01-03',
                // 'updated_at'               => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'title'                    => 'MarkdownThis',
                // 'order'                    => 1,
                'image'                    => 'markdown-this.webp',
                'image_title'              => null,
                // 'extract'                  => '',
                'description'              => null,
                // 'link_repository'          => '',
                // 'link_project'             => '',
                // 'font'                     => 'media/fonts/morpheus.ttf',
                'is_favorite'                  => true,
                'is_display'                   => true,
                'formation_slug'               => 'personnel',
                'created_at'                   => '2020-11-05',
                // 'updated_at'               => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'title'                    => 'Fonts Book',
                // 'order'                    => 1,
                'image'                    => 'fonts-book.webp',
                'image_title'              => null,
                // 'extract'                  => '',
                'description'              => null,
                // 'link_repository'          => '',
                // 'link_project'             => '',
                // 'font'                     => 'media/fonts/morpheus.ttf',
                'is_favorite'                  => false,
                'is_display'                   => true,
                'formation_slug'               => 'personnel',
                'created_at'                   => '2020-09-19',
                // 'updated_at'               => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'title'                    => 'Markdown Interpreter',
                // 'order'                    => 1,
                'image'                    => 'md-interpreter.webp',
                'image_title'              => null,
                // 'extract'                  => '',
                'description'              => null,
                // 'link_repository'          => '',
                // 'link_project'             => '',
                // 'font'                     => 'media/fonts/morpheus.ttf',
                'is_favorite'                  => true,
                'is_display'                   => true,
                'formation_slug'               => 'personnel',
                'created_at'                   => '2020-06-20',
                // 'updated_at'               => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'title'                    => 'Memorandum',
                // 'order'                    => 1,
                'image'                    => 'memorandum.webp',
                'image_title'              => null,
                // 'extract'                  => '',
                'description'              => null,
                // 'link_repository'          => '',
                // 'link_project'             => '',
                // 'font'                     => 'media/fonts/morpheus.ttf',
                'is_favorite'                  => true,
                'is_display'                   => true,
                'formation_slug'               => 'personnel',
                'created_at'                   => '2020-06-27',
                // 'updated_at'               => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'title'                    => 'Vue Tailwind Screen Helper',
                // 'order'                    => 1,
                'image'                    => 'vue-tailwind-screen-helper.webp',
                'image_title'              => null,
                // 'extract'                  => '',
                'description'              => null,
                // 'link_repository'          => '',
                // 'link_project'             => '',
                // 'font'                     => 'media/fonts/morpheus.ttf',
                'is_favorite'                  => false,
                'is_display'                   => true,
                'formation_slug'               => 'personnel',
                'created_at'                   => '2020-06-27',
                // 'updated_at'               => Carbon::now()->format('Y-m-d H:i:s'),
            ],
        ];

        $useweb = [
            [
                'title'                    => 'Imprimerie le Galliard',
                // 'order'                    => 1,
                // 'image'                    => 'portfolio.webp',
                'image_title'              => null,
                // 'extract'                  => '',
                'description'              => null,
                // 'link_repository'          => '',
                // 'link_project'             => '',
                // 'font'                     => 'media/fonts/morpheus.ttf',
                'is_favorite'                  => false,
                'is_display'                   => false,
                'formation_slug'               => 'useweb',
                'created_at'                   => '2019-10-01',
                // 'updated_at'               => Carbon::now()->format('Y-m-d H:i:s'),
            ],

            [
                'title'                    => 'Secob',
                // 'order'                    => 1,
                // 'image'                    => 'portfolio.webp',
                'image_title'              => null,
                // 'extract'                  => '',
                'description'              => null,
                // 'link_repository'          => '',
                // 'link_project'             => '',
                // 'font'                     => 'media/fonts/morpheus.ttf',
                'is_favorite'                  => true,
                'is_display'                   => false,
                'formation_slug'               => 'useweb',
                'created_at'                   => '2020-01-03',
                // 'updated_at'               => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'title'                    => 'Naviso',
                // 'order'                    => 1,
                // 'image'                    => 'portfolio.webp',
                'image_title'              => null,
                // 'extract'                  => '',
                'description'              => null,
                // 'link_repository'          => '',
                // 'link_project'             => '',
                // 'font'                     => 'media/fonts/morpheus.ttf',
                'is_favorite'                  => false,
                'is_display'                   => false,
                'formation_slug'               => 'useweb',
                'created_at'                   => '2020-05-12',
                // 'updated_at'               => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'title'                    => 'CAP Transactions',
                // 'order'                    => 1,
                // 'image'                    => 'portfolio.webp',
                'image_title'              => null,
                // 'extract'                  => '',
                'description'              => null,
                // 'link_repository'          => '',
                // 'link_project'             => '',
                // 'font'                     => 'media/fonts/morpheus.ttf',
                'is_favorite'                  => false,
                'is_display'                   => false,
                'formation_slug'               => 'useweb',
                'created_at'                   => '2018-10-23',
                // 'updated_at'               => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'title'                    => 'CAP Transactions Flutter',
                // 'order'                    => 1,
                // 'image'                    => 'portfolio.webp',
                'image_title'              => null,
                // 'extract'                  => '',
                'description'              => null,
                // 'link_repository'          => '',
                // 'link_project'             => '',
                // 'font'                     => 'media/fonts/morpheus.ttf',
                'is_favorite'                  => true,
                'is_display'                   => false,
                'formation_slug'               => 'conceptrice-developpeuse-dapplications',
                'created_at'                   => '2020-09-03',
                // 'updated_at'               => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'title'                    => 'Laforet',
                // 'order'                    => 1,
                // 'image'                    => 'portfolio.webp',
                'image_title'              => null,
                // 'extract'                  => '',
                'description'              => null,
                // 'link_repository'          => '',
                // 'link_project'             => '',
                // 'font'                     => 'media/fonts/morpheus.ttf',
                'is_favorite'                  => false,
                'is_display'                   => false,
                'formation_slug'               => 'useweb',
                'created_at'                   => '2019-04-01',
                // 'updated_at'               => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'title'                    => 'Useweb Blog Tech',
                // 'order'                    => 1,
                // 'image'                    => 'portfolio.webp',
                'image_title'              => null,
                // 'extract'                  => '',
                'description'              => null,
                // 'link_repository'          => '',
                // 'link_project'             => '',
                // 'font'                     => 'media/fonts/morpheus.ttf',
                'is_favorite'                  => true,
                'is_display'                   => false,
                'formation_slug'               => 'useweb',
                'created_at'                   => '2020-10-19',
                // 'updated_at'               => Carbon::now()->format('Y-m-d H:i:s'),
            ],
        ];

        $school_formation = Formation::whereSlug('licence-de-psychologie')->first();
        $dev_web_formation = Formation::whereSlug('developpeuse-web-web-mobile')->first();
        $poec_formation = Formation::whereSlug('poec-java')->first();
        $cda_formation = Formation::whereSlug('conceptrice-developpeuse-dapplications')->first();
        $personnel_formation = Formation::whereSlug('personnel')->first();
        $useweb_formation = Formation::whereSlug('useweb')->first();

        $this->generate($school, $school_formation);
        $this->generate($personal, $personnel_formation);
        $this->generate($useweb, $useweb_formation);
    }

    public function generate(array $projects, Formation $formation)
    {
        foreach ($projects as $key => $project) {
            $projectCreated = Project::create([
                'title'              => array_key_exists('title', $project) ? $project['title'] : null,
                'order'              => array_key_exists('order', $project) ? $project['order'] : null,
                'description'        => array_key_exists('description', $project) ? $project['description'] : null,
                'is_favorite'        => array_key_exists('is_favorite', $project) ? $project['is_favorite'] : false,
                'is_display'         => array_key_exists('is_display', $project) ? $project['is_display'] : null,
                'created_at'         => array_key_exists('created_at', $project) ? $project['created_at'] : null,
                'updated_at'         => array_key_exists('updated_at', $project) ? $project['updated_at'] : null,
            ]);
            if (is_array($project) && array_key_exists('links', $project)) {
                $project['links'];
                foreach ($project['links'] as $key => $link) {
                    $projectLink = ProjectLink::create([
                        'repository'          => $link['repository'],
                        'project'             => $link['project'],
                        'type'                => ProjectLinkType::make($key),
                    ]);
                    $projectLink->project()->associate($projectCreated);
                    $projectLink->save();
                }
            }
            $formation_slug = array_key_exists('formation_slug', $project) ? $project['formation_slug'] : null;
            $formation = Formation::whereSlug($formation_slug)->first();
            if ($formation) {
                $projectCreated->formation()->associate($formation);
                $projectCreated->save();
            }

            $image = array_key_exists('image', $project) ? $project['image'] : null;
            $image_title = array_key_exists('image_title', $project) ? $project['image_title'] : null;
            try {
                $image = File::get(database_path("seeders/media/projects/$image"));
                $image_title = File::get(database_path("seeders/media/projects/title/$image_title"));
            } catch (\Throwable $th) {
                //throw $th;
            }
            if ($image) {
                $projectCreated->addMediaFromString($image)
                    ->setName($projectCreated->slug)
                    ->setFileName($projectCreated->slug.'.webp')
                    ->toMediaCollection('projects', 'projects');
            }
            if ($image_title) {
                $projectCreated->addMediaFromString($image_title)
                    ->setName($projectCreated->slug.'_title')
                    ->setFileName($projectCreated->slug.'_title'.'.webp')
                    ->toMediaCollection('projects_title', 'projects');
            }
        }
    }
}
