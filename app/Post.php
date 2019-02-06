<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\Sluggable;

class Post extends Model
{
    use Sluggable;
	public function sluggable() {
        return [ 'source' => 'title' ];
    }
    
    public function user(){
    	return $this->belongsTo(User::class);
    }

    public function getLinkAttribute(){
    	$prefix = ($this->post_type ==1) ? "posts/" : "pages/";
    	return url("/".$prefix.$this->slug);
    }

    public function getImageAttribute(){
        return asset("/images/blog/".$this->featuredImage);
    }

}
