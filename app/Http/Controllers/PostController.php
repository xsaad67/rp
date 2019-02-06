<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use DomDocument;

class PostController extends Controller
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
        return view("admin.posts.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'bail|required|max:255',
            'body' => 'required',
            'image' => 'required|image',
            'post_type' => 'required',
            'user' => 'required',
        ]);

        $fileName = null;
        if($request->hasFile('image')){
            $savePath = public_path('/images/blog');
            $photo = $request->file('image');
            $fileName = "ft_".sha1(date('YmdHis') . str_random(30)) . '.' . $photo->getClientOriginalExtension();
            $photo->move($savePath, $fileName);
        }

        $body = savingBlogimage($request->body,$request->title);
        $post = new Post();
        $post->title = $request->title;
        $post->postType = $request->post_type;
        $post->body = $body;
        $post->user_id = $request->user;
        $post->featuredImage = $fileName;
        $post->save();
        return redirect()->back()->with('message', 'Post Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view("admin.posts.edit",compact("post"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'bail|required|max:255',
            'body' => 'required',
            'post_type' => 'required',
            'user' => 'required',
        ]);

        $fileName = $post->featuredImage;

        if($request->hasFile('image')){
            $savePath = public_path('/images/blog');
            $photo = $request->file('image');
            $fileName = "ft_".sha1(date('YmdHis') . str_random(30)) . '.' . $photo->getClientOriginalExtension();
            $photo->move($savePath, $fileName);
        }

        $body = savingBlogimage($request->body,$request->title);
       
        $post->title = $request->title;
        $post->postType = $request->post_type;
        $post->body = $body;
        $post->user_id = $request->user;
        $post->featuredImage = $fileName;
        $post->save();
        return redirect()->back()->with('message', 'Post Created');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
