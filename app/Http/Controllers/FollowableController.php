<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Recipe;

class FollowableController extends Controller
{
    
    public function favorite(Request $request){

    	$user = User::find(1);
    	$recipe = Recipe::find($request->id);
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


    }
}

?>