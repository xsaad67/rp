<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer(["layouts.main-sidebar","recipes.featured-slider"],"App\Http\ViewComposers\RecipeComposer");
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
