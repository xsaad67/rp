<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RecipeIngridents;

class SearchController extends Controller
{
    
    public function index(Request $request){
    	 // return $request->q;
    	 // $recipe = new Recipe();
    	 // return Recipe::where('title','LIKE','%'.$request->q.'%')->OrWhere('description','LIKE','%'.$request->q.'%')->get();


    	$recipeIng=RecipeIngridents::select('recipe_id')->where('note', 'LIKE','%'.$request->q.'%')->groupBy('recipe_id')->pluck('recipe_id')->implode(',');

    	if(!empty($recipeIng)){
    		Recipe::whereIn('id',$recipeIng)->get();

    	}
    }
}

