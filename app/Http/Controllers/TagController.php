<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;

class TagController extends Controller
{
   	public function show($slug){
   		$tag= Tag::where("slug",$slug)->firstOrFail();
   		$recipes= $tag->recipes()->with("favoriters")->paginate(15);
   		return view("tags.show",compact('tag','recipes'));
   	}
}
