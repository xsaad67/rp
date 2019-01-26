<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RecipeIngridents;
use App\Recipe;
use App\Search;

class SearchController extends Controller
{
    
    public function simpleLikeSearch(Request $request){
    	
		$recipes = Recipe::where('title','LIKE','%'.$request->search.'%')
                ->OrWhere('description','LIKE','%'.$request->search.'%')
                ->get();
          
          
    	$recipeIng=RecipeIngridents::select('recipe_id')
                    ->where('note', 'LIKE','%'.$request->search.'%')
                    ->groupBy('recipe_id')
                    ->pluck('recipe_id');
                    
                    
    	if(!empty($recipeIng)){
    		$ingredientRecipes = Recipe::whereIn('id',$recipeIng)->get();
    	}
        $searchCount = count($recipes) + count($ingredientRecipes);

        $search = new Search();
        $search->ip = $request->ip();
        if(auth()->check()){
            $search->ip = auth()->id();
            $search->isGuest = 0;
        }
        $search->keyword = $request->search;
        $search->resultCount = $searchCount;
        
        $search->save();

        return view('pages.search',compact('recipes','ingredientRecipes','searchCount'));
    }


    public function index(Request $request){

    	$fullTextSearch=RecipeIngridents::select('recipe_id')
                        ->search($request->q)
                        ->groupBy('recipe_id')
                        ->pluck('recipe_id');
    	return $fullTextSearch;

    }
}

