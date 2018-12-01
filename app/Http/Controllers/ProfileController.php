<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Recipe;

class ProfileController extends Controller
{
    
    public function show($slug){

    	$user = User::where('slug',$slug)->firstOrFail();
    	$recipes = $user->recipes()->latest()->paginate(5);
    	return view('chefs.show',compact('recipes'));
    }

    public function edit(User $user){
    	return view('chefs.edit');
    }

}
