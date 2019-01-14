<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Overtrue\LaravelFollow\Traits\CanFavorite;
use Overtrue\LaravelFollow\Traits\CanFollow;
use Overtrue\LaravelFollow\Traits\CanBeFollowed;
use App\Traits\Sluggable;
// use Avatar;

class User extends Authenticatable
{
    use Notifiable, CanFavorite,CanBeFollowed, Sluggable;

    public function sluggable() {
        return [ 'source' => 'name' ];
    }

    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function getLinkAttribute(){
        return url("/") . '/chef/'.$this->slug;
    }

    public function getAvatarAttribute(){
         return is_null($this->dp) ? \Avatar::create($this->name)->setBorder(0,'adf'): asset('img/avatars/'.$this->dp);
    }
    
    public function recipes(){
        return $this->hasMany(Recipe::class, 'user_id');
    }

    public function isAdmin(){
        return $user->is_admin ==1 ? TRUE : FALSE;
    }
}
