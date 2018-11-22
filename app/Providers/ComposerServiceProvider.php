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
        view()->composer("main-sidebar","App\Http\ViewComposers\MovieComposer");
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
