<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\FullTextSearch;

class RecipeIngridents extends Model
{
	use FullTextSearch;
	protected $searchable = ['note'];


    public function recipe(){
    	return $this->belongsTo(Recipe::class,"recipe_id");
    }
}
