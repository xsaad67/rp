<?php

namespace App\Http\Controllers;

use App\Rating;
use Illuminate\Http\Request;
use App\Recipe;
use App\Post;

class RatingController extends Controller
{



    public function __construct(){
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = auth()->user();
        return $user;
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
    public function store(Request $request, $model, $id)
    {   
        $rated = "";

        switch($model){

            case "recipe":
                $rated = Recipe::findOrFail($id);
                break;
            case "post":
                $rated = Post::findOrFail($id);
                break;
            default:
                return response()->json(404);

        }

        $rating = new Rating();
        $rating->user_id = auth()->id();
        $rating->rating=$request->rating;
        $rating->review = $request->review;
       
        $r = $rated->ratings()->save($rating);
        
        $returnHTML = view('reviews.show')->with('review', $r)->render();
        return response()->json( array('success' => true, 'html'=>$returnHTML));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Rating  $rating
     * @return \Illuminate\Http\Response
     */
    public function show(Rating $rating)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Rating  $rating
     * @return \Illuminate\Http\Response
     */
    public function edit(Rating $rating)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Rating  $rating
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rating $rating)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Rating  $rating
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rating $rating)
    {
        //
    }
}
