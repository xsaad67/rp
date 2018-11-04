<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
    ];
});


$factory->define(App\Recipe::class, function (Faker $faker) {

    $items = ['recipe3.jpg','recipe4.jpg','recipe5.jpg','recipe6.jpg','recipe7.jpg',NULL];
    return [
        'user_id' => rand(1,20),
        'title' => $faker->sentence,
        'category_id'=> rand(1,20),
        'cuisine' => rand(1,20),
        'slug' => $faker->slug,
        'description' => $faker->paragraph,
        'serves' => rand(1,4), 
        'preprationTime' => $faker->time('H:i'),
        'cookingTime' => $faker->time('H:i'),
        'cookingTemprature' => rand(180,360),
        'featuredImage'=>$items[array_rand($items)],

    ];
});



$factory->define(App\RecipeIngridents::class, function (Faker $faker) {
    return [
        'recipe_id' => rand(1,50),
        'amount' => $faker->randomDigit,
        'note'=> $faker->name
    ];
});



$factory->define(App\RecipeInstruction::class, function (Faker $faker) {
    $items = ['recipe3.jpg','recipe4.jpg','recipe5.jpg','recipe6.jpg','recipe7.jpg',NULL];
        
    return [
        'recipe_id' => rand(1,50),
        'description' => $faker->text(300),
        'image'=>$items[array_rand($items)],
    ];
});

