<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Recipe;

class ProfileController extends Controller
{

    public function __construct(){
        return $this->middleware('auth')->except(['show']);
    }
    
    public function show($slug){
    	$user = User::where('slug',$slug)->firstOrFail();
    	$recipes = $user->recipes()->latest()->paginate(8);
    	return view('chefs.show',compact('recipes','user'));
    }

    public function edit(){
        $user= auth()->user();
    	return view('chefs.edit',compact('user'));
    }


    public function update(User $user)
    {
    	return $user;
    }
}
