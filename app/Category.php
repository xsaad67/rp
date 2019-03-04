<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\Sluggable;

class Category extends Model
{
	use Sluggable;

	protected $fillable = ['name'];

    public function sluggable() {
        return [ 'source' => 'name' ];
    }

    public function recipes(){
    	return $this->hasMany(Recipe::class);
    }
}
