<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class NewsLetter extends Model
{
	use SoftDeletes;

	protected $dates = ['deleted_at'];
   
}
