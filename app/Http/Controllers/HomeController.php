<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Recipe;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $user = auth()->user();
        // $recipe = Recipe::find(1);

        // $user->favorite($recipe);
        // return $favorited;
        // return $user;

         return view('home');
    }
}
