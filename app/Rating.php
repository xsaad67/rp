<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    
	protected $fillable = ['rating','review','title'];

    public function rateable(){
    	return $this->morphTo();
    }

    public function user(){
    	return $this->belongsTo(User::class);
    }

    public function scopeNewest($query){
        return $query->orderBy('created_at','Desc');
    }
}
