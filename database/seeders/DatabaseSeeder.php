<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function directoryToStorage($dir)
    {
        $database_files = database_path('seeders/storage/');
        $src = $database_files.$dir;
        $dst = storage_path('app/public/'.$dir);
        recurseCopy($src, $dst);
    }

    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        rrmdir(storage_path('app/public/*'));
        $this->directoryToStorage('documents');
        $this->directoryToStorage('projects');
        $this->directoryToStorage('icons');
        $this->directoryToStorage('formations');
        $this->directoryToStorage('fonts');
        $this->directoryToStorage('skills');
        // $this->call(UsersTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(FormationsTableSeeder::class);
        $this->call(ProjectsTableSeeder::class);
        $this->call(SkillsTableSeeder::class);
        $this->call(SocialsTableSeeder::class);
        $this->call(TextsTableSeeder::class);
        $this->call(MediasTableSeeder::class);
        $this->call(PassionsTableSeeder::class);
        $this->call(ProjectsMembersTableSeeder::class);
        $this->call(ForeignKeysTableSeeder::class);
    }
}