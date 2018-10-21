<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RecipeInstruction extends Model
{
    

    public function recipe(){
    	return $this->belongsTo(Recipe::class);
    }
}
