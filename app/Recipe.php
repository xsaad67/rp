<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Overtrue\LaravelFollow\Traits\CanBeFavorited;

class Recipe extends Model
{

  use CanBeFavorited;
  
  public static function boot()
  {
     parent::boot();

     static::creating(function($model) {
         $model->slug = str_slug($model->title);

         $latestSlug =
             static::whereRaw("slug = '$model->slug' or slug LIKE '$model->slug-%'")
                 ->latest('id')
                 ->value('slug');
         if ($latestSlug) {
             $pieces = explode('-', $latestSlug);

             $number = intval(end($pieces));

             $model->slug .= '-' . ($number + 1);
         }
     });
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
   
}
