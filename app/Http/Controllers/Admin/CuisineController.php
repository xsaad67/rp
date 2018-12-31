<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Cuisine;

class CuisineController extends Controller
{
    public function index(){
    	$cuisines = Cuisine::withCount("recipes")->paginate(5);
    	return view("admin.a_cuisine.index",compact("cuisines"));
	}

	public function create(){
		return view("admin.a_cuisine.create");
	}

	public function store(Request $request)
	{
		$cuisine = new Cuisine();
		$cuisine->name = $request->name;

		if($request->has("image")){
			$imageName = "cuisine_".generateUniqueFileName().'.'.$request->image->getClientOriginalExtension();
  			$request->image->move(public_path('/images/cuisines'), $imageName);

  			$cuisine->image = "cuisines/".$imageName;
		}

		$cuisine->icon = $request->icon;

		$isSave = $cuisine->save();

		dd($isSave);

	}
}
