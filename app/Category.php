<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\Sluggable;

class Category extends Model
{
    public function sluggable() {
        return [ 'source' => 'name' ];
    }

    public function posts(){
    	return $this->hasMany(Post::class);
    }
}
