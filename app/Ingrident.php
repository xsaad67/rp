<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\Sluggable;


class Ingrident extends Model
{
	use Sluggable;
	
    protected $fillable = ['name'];

    public function sluggable() {
        return [ 'source' => 'name' ];
    }

}
