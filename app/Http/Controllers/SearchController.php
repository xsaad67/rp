<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RecipeIngridents;
use App\Recipe;

class SearchController extends Controller
{
    
    public function simpleLikeSearch(Request $request){
    	
		Recipe::where('title','LIKE','%'.$request->q.'%')->OrWhere('description','LIKE','%'.$request->q.'%')->get();

    	$recipeIng=RecipeIngridents::select('recipe_id')->where('note', 'LIKE','%'.$request->q.'%')->groupBy('recipe_id')->pluck('recipe_id');
    	if(!empty($recipeIng)){

    		$recipes = Recipe::whereIn('id',$recipeIng)->get();
    		return $recipes;
    	}


    }


    public function index(Request $request){

    	$fullTextSearch = RecipeIngridents::select('recipe_id')->search($request->q)->groupBy('recipe_id')->pluck('recipe_id');
    	return $fullTextSearch;

    }
}

