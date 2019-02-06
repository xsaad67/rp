<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Image;
use DomDocument;

class AdminController extends Controller
{
    public function index(){

		// $path = 'blob:http://recipe.localhost/1a752359-31e2-4c39-8eff-b2b5f4455ae7';
		// $filename = basename($path);

		// Image::make($path)->save(public_path('ck/' . $filename));
    	return view('admin.basic');
    }

    public function store(Request $request){
    
    }


}
