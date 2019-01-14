<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(CrawlLinksTableSeeder::class);
        $this->call(RecipesTableSeeder::class);
        $this->call(TagsTableSeeder::class);
        $this->call(TaggablesTableSeeder::class);
        $this->call(RecipeIngridentsTableSeeder::class);
        // $this->call(RecipeInstructionsTableSeeder::class);
    }
}
