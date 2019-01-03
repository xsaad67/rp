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

    protected $casts = ['features' => 'array'];


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

    public function ratings(){
        return $this->morphMany('App\Rating','rateable')->newest();
    }



    public function scopePopular($query,$count=8){
        return $query->where('isPublished',1)
                    ->orderBy('views','Desc')
                    ->take($count)
                    ->get();
    }

    public function scopePublished($query){
        return $query->where('isPublished',1)
                    ->latest();
    }

    public function tags()
    {
        return $this->morphToMany('App\Tag', 'taggable');
    }
   
}
