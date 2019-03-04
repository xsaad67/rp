<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RecipeInstruction extends Model
{
    public function recipe(){
    	return $this->belongsTo(Recipe::class);
    }

    public function getDescriptionAttribute(){
        return html_entity_decode( strip_tags($this->attributes['description']) );
    }
}
