<?php

namespace App\Http\Controllers;

use App\Recipe;
use Illuminate\Http\Request;
use App\Ingrident;
// use Avatar;

class RecipeController extends Controller
{
    private $savePath="";

    public function __construct(){
        $this->savePath = public_path('/recipes');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recipes = Recipe::with('favoriters')->take(20)->get(); 
        // return $recipes;
        return view('recipes.index',compact('recipes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return "hello world";
        return view('recipes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $userId = is_null(auth()->id()) ? 1 : auth()->id();


        // dd($request->all());

        if (!is_dir($this->savePath)) {
            mkdir($this->savePath, 0777);
        }
        // dd($request->file('image'));

        $photo = $request->file('image');
        $saveName = sha1(date('YmdHis') . str_random(30)) . '.' . $photo->getClientOriginalExtension();
        $photo->move($this->savePath, $saveName);

        

        $recipe = new Recipe();

        $recipe->user_id = $userId;
        $recipe->title = $request->title;
        $recipe->cuisine = $request->cuisine;
        $recipe->category = $request->category;
        $recipe->description = $request->description;
        $recipe->serves =  $request->yield;
        $recipe->preprationTime = $request->preptime;
        $recipe->cookingTime = $request->cooktime;
        $recipe->cookingTemprature = $request->cooktemp;
        $recipe->featuredImage = $saveName;
        $isSave = $recipe->save();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        
        $recipe = Recipe::with("rIngridents")->where('slug',$slug)->firstOrFail();
        // return $recipe->with('ingridents')->where('slug',$slug)->firstOrFail();
        return view("recipes.show",compact("recipe"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function edit(Recipe $recipe)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Recipe $recipe)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Recipe $recipe)
    {
        //
    }
}
