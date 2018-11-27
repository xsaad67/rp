<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RecipeReviews extends Model
{
    
    public function recipe(){
    	return $this->belongsTo(Recipe::class);
    }

    public function user(){
    	return $this->belongsTo(User::class);
    }
}
