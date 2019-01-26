<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Recipe;

class FollowableController extends Controller
{
    public function __construct(){
        return $this->middleware('auth');
    }
    public function favorite(Request $request){

    	if(!auth()->check()){
    		return response()->json(['unauth'=>1,'redirect'=>url("/").'/login']);
    	}

    	$user = auth()->user();
    	$recipe = Recipe::find($request->id);

    	if($recipe){

	    	$favorited = $user->toggleFavorite($recipe);
	    	if( isset($favorited['attached'][0]) && $favorited['attached'][0]==$recipe->id){
	    		return response()->json(['success'=>true,'class'=>'favorited','tooltip'=>'Unfavorite this recipe']);
	    	}else if(isset($favorited['detached'][0]) && $favorited['detached'][0]==$recipe->id){
	    		return response()->json(['success'=>true,'class'=>'favorite','tooltip'=>'Add to favorite']);
	    	}

	    }else{
	    	return "nope";
	    }
    }

    public function listFavorite(){
        $user = auth()->user();
        $favorites = $user->favorites(\App\Recipe::class)->get();
        return view('members.favorites',compact('favorites'));
    }
}

?>