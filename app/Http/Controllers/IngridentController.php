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
       $ingridents = Ingrident::pluck("name");
       
        // dd($recipeIng);
        
        // $recipeIng = RecipeIngridents::where('recipe_id',1)->pluck("note");
       
        // foreach($recipeIng as $key=>&$note){

        //    foreach($ingridents as $ing){
                
        //         if(preg_match('/\b'.$ing.'\b/',$note)){
        //             $url = "<a href='/ingridients/".urlencode(trim($ing))."'>".trim($ing)."</a>";
        //             $note= str_replace($ing," ".$url." ",$note);
        //         }

        //     }
        //     echo $note."<br>";
        // }



        $recipeIng = RecipeIngridents::where('recipe_id',1)->get();
       
        foreach($recipeIng as $rIng){

           // foreach($ingridents as $ing){
                
           //      if(preg_match('/\b'.$ing.'\b/',$rIng->note)){
           //          $url = "<a href='/ingridients/".urlencode(trim($ing))."'>".trim($ing)."</a>";
           //          $rIng->note= str_replace($ing," ".$url." ",$rIng->note);
           //      }

           //  }
            // $rIng->note = strip_tags($rIng->note);
            var_dump(parserIndgredient($rIng->note));//."<br>";
            // $rIng->save();
        }

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
