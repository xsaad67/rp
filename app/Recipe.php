<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Overtrue\LaravelFollow\Traits\CanBeFavorited;
use App\Traits\Sluggable;
use App\Traits\Rateable;

class Recipe extends Model
{

    use CanBeFavorited, Sluggable,Rateable;
  
    public function sluggable() {
        return [ 'source' => 'title' ];
    }

    protected $casts = ['features' => 'array'];


    protected $with =['chef'];

	public function getLinkAttribute(){
    	return url("/") . '/recipes/'.$this->slug;
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

   


    public function scopePopular($query,$count=8){
        return $query->where('isPublished',0)
                    ->orderBy('views','Desc')
                    ->take($count)
                    ->get();
    }
    

    public function getImageAttribute(){

        return asset("images/recipes/recipe (".rand(1,64).").jpg");

        if (is_null($this->featuredImage)) { 
            return "placeholder image";
        }
        return filter_var($this->featuredImage, FILTER_VALIDATE_URL) ? $this->featuredImage : "hello world";
    }

    public function scopePublished($query){
        return $query->where('isPublished',0);
    }

    public function keywords()
    {
        return $this->morphToMany('App\Tag', 'taggable');
    }
    
    public function getTitleAttribute(){
        return ucwords(htmlspecialchars_decode($this->attributes['title']));
    }

}
