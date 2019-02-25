<?php

namespace App\Http\Controllers;

use App\Recipe;
use Illuminate\Http\Request;
use App\Ingrident;
use App\Rating;
use App\Http\Requests\StoreRecipe;

class RecipeController extends Controller
{
    private $savePath="";

    public function __construct(){
        $this->middleware('auth')->except(['index','show']);
        $this->savePath = public_path('/images/recipes');
        if (!is_dir($this->savePath)) {
            mkdir($this->savePath, 0777);
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return view("layouts.main");
        $recipes = Recipe::with('favoriters')->published()->oldest()->paginate(); 
        $featuredRecipes =  Recipe::inRandomOrder()->take(6)->get();;

        return view('recipes.index',compact('recipes','featuredRecipes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('recipes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRecipe $request)
    {

        $userId = is_null(auth()->id()) ? 1 : auth()->id();

        $photo = $request->file('image');
        $saveName = sha1(date('YmdHis') . str_random(30)) . '.' . $photo->getClientOriginalExtension();
        $photo->move($this->savePath, $saveName);

        $recipe = new Recipe();

        $recipe->user_id = $userId;
        $recipe->title = $request->title;
        $recipe->cuisine_id = $request->cuisine;
        $recipe->category_id = $request->category;
        $recipe->description = $request->description;
        $recipe->serves =  $request->yield;
        $recipe->preprationTime = $request->preptime;
        $recipe->cookingTime = $request->cooktime;
        $recipe->cookingTemprature = $request->cooktemp;
        $recipe->featuredImage = $saveName;
        $recipe->dirtyIng = $request->ingredients;
        $recipe->dirtyIns = $request->steps;
        $isSave = $recipe->save();
        if($isSave){

            $ingredientArray = \App\Ingrident::pluck("name","slug");

            foreach(breakStringLine($request->ingredients) as $ingridents){
                $ingrident = new \App\RecipeIngridents();

                $taggedIng =ingredientsToLink($ingredientArray,$ingridents);
                $ingrident->note =  $ingridents;
                $ingrident->displayNote = $taggedIng['note'];
                $ingrident->ingrident = $taggedIng['matched'];
                $ingrident->recipe_id = $recipe->id;
                $ingrident->save();
            }
          
            foreach(breakStringLine($request->steps) as $instructions){
                $step = new \App\RecipeInstruction();
                $step->description = $instructions;
                $step->recipe_id = $recipe->id;
                $step->save();
            }

            return $recipe;

        }else{
              return abort('500');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {

        $featuredRecipes =  Recipe::inRandomOrder()->take(8)->get();;
        $recipe = Recipe::with("ingredients",'instructions','keywords')->where('slug',$slug)->firstOrFail();
        // return $recipe->id;
        // return $recipe->ratings;
        $preprationTime=checkIso($recipe->preprationTime);
        $cookingTime = checkIso($recipe->cookingTime);
        $totalTime = checkIso($recipe->totalTime);
                                                                                    
        return view("recipes.show",compact("recipe",'preprationTime','cookingTime','featuredRecipes','totalTime'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function edit(Recipe $recipe)
    {
        return view('recipes.edit',compact('recipe'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function update(StoreRecipe $request, Recipe $recipe)
    {

        $recipe->user_id = auth()->id();
        $recipe->title = $request->title;
        $recipe->cuisine_id = $request->cuisine;
        $recipe->category_id = $request->category;
        $recipe->description = $request->description;
        $recipe->serves =  $request->yield;
        $recipe->preprationTime = $request->preptime;
        $recipe->cookingTime = $request->cooktime;
        $recipe->cookingTemprature = $request->cooktemp;
        $recipe->dirtyIng = $request->ingredients;
        $recipe->dirtyIns = $request->steps;

        if($request->has('image')){
            $photo = $request->file('image');
            $saveName = sha1(date('YmdHis') . str_random(30)) . '.' . $photo->getClientOriginalExtension();
            $photo->move($this->savePath, $saveName);
            $recipe->featuredImage = $saveName;
        }
        
        $recipe->save();

        if($recipe->isDirty("dirtyIns")){

           $recipe->instructions()->delete();
            foreach(breakStringLine($request->steps) as $instructions){
                $step = new \App\RecipeInstruction();
                $step->description = $instructions;
                $step->recipe_id = $recipe->id;
                $step->save();
            }

        }

        if($recipe->isDirty("dirtyIng")){

           $recipe->ingredients()->delete();
            $ingredientArray = \App\Ingrident::pluck("name","slug");

            foreach(breakStringLine($request->ingredients) as $ingridents){
                $ingrident = new \App\RecipeIngridents();

                $taggedIng =ingredientsToLink($ingredientArray,$ingridents);
                $ingrident->note =  $ingridents;
                $ingrident->displayNote = $taggedIng['note'];
                $ingrident->ingrident = $taggedIng['matched'];
                $ingrident->recipe_id = $recipe->id;
                $ingrident->save();
            }
            
        }

      
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
