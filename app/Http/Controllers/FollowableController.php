<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Recipe;

class FollowableController extends Controller
{
    

    public function favorite(Request $request){
    	$user = auth()->user();
    	$recipe = Recipe::findOrFail(decrypt($request->recipe));
    	$user->favorited($recipe);
    	return $user->favorites()->get();
    }
}
