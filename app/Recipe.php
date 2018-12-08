<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Overtrue\LaravelFollow\Traits\CanBeFavorited;
use App\Traits\Sluggable;

class Recipe extends Model
{

    use CanBeFavorited, Sluggable;
  
    public function sluggable() {
        return [ 'source' => 'title' ];
    }


    protected $with =['chef'];

	public function getLinkAttribute(){
    	return url("/") . '/recipe/'.$this->slug;
    }
	
    public function chef(){
    	return $this->belongsTo(User::class,'user_id');
    }

    public function ingredients(){
        return $this->hasMany(RecipeIngridents::class);
    }


    public function instructions(){
    	return $this->hasMany(RecipeInstruction::class);
    }


    public function scopePopular($query){
        return $query->orderBy('created_at','Desc');
    }

    public function ratings(){
        return $this->morphMany('App\Rating','rateable')->newest();
    }

    

   
  
   
}
