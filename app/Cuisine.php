<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\Sluggable;

class Cuisine extends Model
{
   	use Sluggable;


    public function sluggable() {
        return [ 'source' => 'name' ];
    }

    public function recipes(){
    	return $this->hasMany(Recipe::class);
    }

    public function link(){
    	return url("/cuisines/".$this->slug);
    }
}
