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
        $this->call(IngridentsTableSeeder::class);
        $this->call(CuisinesTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
    }
}
