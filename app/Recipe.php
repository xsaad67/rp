<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Overtrue\LaravelFollow\Traits\CanBeFavorited;
use App\Traits\Sluggable;

class Recipe extends Model
{

  use CanBeFavorited, Sluggable;
  
    public function sluggable() {
        return [ 'source' => 'name' ];
    }


    protected $with =['chef'];

	public function getLinkAttribute(){
    	return url("/") . '/recipe/'.$this->slug;
    }
	
    public function chef(){
    	return $this->belongsTo(User::class,'user_id');
    }

    public function rIngridents(){
    	return $this->hasMany(RecipeIngridents::class);
    }


    public function rInstructions(){
    	return $this->hasMany(RecipeInstruction::class);
    }


    public function scopePopular($query){
        return $query->orderBy('created_at','Desc');
    }
  
   
}
