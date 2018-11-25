<?php

namespace App\Http\Controllers;

use App\NewsLetter;
use Illuminate\Http\Request;

class NewsLetterController extends Controller
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
        $isGuest = auth()->check() ? 0 : 1;

        $request->validate([
            'email' => 'required|unique:news_letters|email',
        ]);
        
        $subscribe = new NewsLetter();

        $subscribe->email = $request->email;
        $subscribe->isGuest = $isGuest;
        $isSave = $subscribe->save();

        if($isSave){
           return response()->json(['success'=>true]);
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\NewsLetter  $newsLetter
     * @return \Illuminate\Http\Response
     */
    public function show(NewsLetter $newsLetter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\NewsLetter  $newsLetter
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        
        if(!empty(request('email'))){

            $email = request('email');
           
            if (NewsLetter::where('email', '=', $email)->exists()) {
                // Subscriber exist 
                return view('pages.unsub',compact('email'));
            }else{ abort(404); }

        }else{ abort(404); }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\NewsLetter  $newsLetter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NewsLetter $newsLetter)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\NewsLetter  $newsLetter
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $email = $request->email;
        $newsletter = NewsLetter::where('email', '=', $email)->firstOrFail();
        $newsletter->delete();
        
    }
}
