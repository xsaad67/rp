<?php

namespace App\Http\Controllers;

use App\Ingrident;
use App\RecipeIngridents;
use Illuminate\Http\Request;

class IngridentController extends Controller
{



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ingridents = Ingrident::pluck("name","slug");
       
        $recipeIng = RecipeIngridents::where('recipe_id',1)->pluck("note");

        foreach($recipeIng as $key=>&$note){
            echo ingredientsToLink($ingridents,$note);
            echo "<br>";
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ingrident  $ingrident
     * @return \Illuminate\Http\Response
     */
    public function show(Ingrident $ingrident)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ingrident  $ingrident
     * @return \Illuminate\Http\Response
     */
    public function edit(Ingrident $ingrident)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ingrident  $ingrident
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ingrident $ingrident)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ingrident  $ingrident
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ingrident $ingrident)
    {
        //
    }
}
