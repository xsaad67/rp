<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RecipeImages extends Model
{

	protected $slugged = "fileName";
    
    public static function boot()
    {
       parent::boot();
       // {'$hello'}

       static::creating(function($model) {
           $model->originalFileName = str_slug($model->{'$this->slugged'});

           $latestSlug =
               static::whereRaw("originalFileName = '$model->originalFileName' or originalFileName LIKE '$model->originalFileName-%'")
                   ->latest('id')
                   ->value('originalFileName');
           if ($latestSlug) {
               $pieces = explode('-', $latestSlug);

               $number = intval(end($pieces));

               $model->originalFileName .= '-' . ($number + 1);
           }
       });
    }

}
