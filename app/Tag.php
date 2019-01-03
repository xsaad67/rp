<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\Sluggable;

class Tag extends Model
{
    use Sluggable;
    protected $fillable = ['name'];

    public function sluggable() {
        return ['source' => 'name'];
    }

    
	public function recipes()
    {
        return $this->morphedByMany('App\Recipe', 'taggable')->withTimestamps();
    }
}
