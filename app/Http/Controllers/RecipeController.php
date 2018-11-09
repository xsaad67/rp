<?php

namespace App\Http\Controllers;

use App\Recipe;
use Illuminate\Http\Request;
use App\Ingrident;
// use Avatar;

class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recipes = Recipe::with('favoriters')->get(); 
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

        dd($request->all());

        $recipe = new Recipe();

        $recipe->user_id = auth()->id();
        $recipe->cuisine = implode(",",$request->cuisine);
        $recipe->category = implode(",",$request->category);
        $recipe->description = $recipe->description;
        

        $recipe = new Recipe();
        $bits = explode("\n", $request->hello); 

        $newstring = "<ol>";
        foreach($bits as $bit)
        {
          $newstring .= "<li>" . $bit . "</li>";
        }
        $newstring .= "</ol>";

        echo $newstring;

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        
         $recipe = Recipe::with("instructions","ingridents")->where('slug',$slug)->firstOrFail();

        // return $recipe;

         // return Ingrident::pluck('name');
         // foreach($recipe->ingridents as $instructions){
         //     if(containsWord($instructions->note,'olive')==1){
         //         echo str_replace('olive','hello',$instructions->note);
                 
         //     }
         // }
        // return $recipe;//->instructions;
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
