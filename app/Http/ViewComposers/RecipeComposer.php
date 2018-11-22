<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Recipe;

class RecipeComposer
{
    public $movieList = [];
    /**
     * Create a movie composer.
     *
     * @return void
     */
    public function __construct()
    {
        $this->featuredRecipes = Recipe::oldest()->take(15)->get();
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('featuredRecipes', $this->featuredRecipes);
    }
}