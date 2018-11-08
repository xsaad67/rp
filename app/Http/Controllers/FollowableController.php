<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
<<<<<<< HEAD
=======
use App\User;
>>>>>>> 404f8fc9b102d9cda044104086ab121b55f27dc5
use App\Recipe;

class FollowableController extends Controller
{
    
<<<<<<< HEAD

    public function favorite(Request $request){
    	$user = auth()->user();
    	$recipe = Recipe::findOrFail(decrypt($request->recipe));
    	$user->favorited($recipe);
    	return $user->favorites()->get();
=======
    public function favorite(){

    	$user = User::find(1);
    	$recipe = Recipe::find(24);
    	if($recipe){

	    	$favorited = $user->toggleFavorite($recipe);
	    	if( isset($favorited['attached'][0]) && $favorited['attached'][0]==$recipe->id){

	    		$totalVotes = $recipe->favoriters()->count();

	    		return response()->json(['success'=>true,'class'=>'favorited', 'totalVotes'=>$totalVotes]);

	    	}else if(isset($favorited['detached'][0]) && $favorited['detached'][0]==$recipe->id){
	    	
	    		$totalVotes = $recipe->favoriters()->count();

	    		return response()->json(['success'=>true,'class'=>'unfavorited', 'totalVotes'=>$totalVotes]);
	    	}

	    }else{
	    	return "nope";
	    }


>>>>>>> 404f8fc9b102d9cda044104086ab121b55f27dc5
    }
}
