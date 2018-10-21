<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RecipeIngridents extends Model
{
 
    public function recipe(){
    	return $this->belongsTo(Recipe::class,"recipe_id");
    }
}
