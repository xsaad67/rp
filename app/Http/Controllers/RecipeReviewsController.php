<?php

namespace App\Http\Controllers;

use App\RecipeReviews;
use Illuminate\Http\Request;

class RecipeReviewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

        $review = new RecipeReviews();
        $request->validate([
            "rating" => 'required|numeric|max:5|not_in:0',
        ]);

        $review->recipe_id = decrypt($request->recipeId);
        $review->user_id = 1;
        $review->rating = $request->rating;
        $review->review = $request->review;
        $review->save();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\RecipeReviews  $recipeReviews
     * @return \Illuminate\Http\Response
     */
    public function show(RecipeReviews $recipeReviews)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\RecipeReviews  $recipeReviews
     * @return \Illuminate\Http\Response
     */
    public function edit(RecipeReviews $recipeReviews)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\RecipeReviews  $recipeReviews
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RecipeReviews $recipeReviews)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\RecipeReviews  $recipeReviews
     * @return \Illuminate\Http\Response
     */
    public function destroy(RecipeReviews $recipeReviews)
    {
        //
    }
}
