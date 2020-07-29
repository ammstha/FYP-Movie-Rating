<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Zizaco\Entrust\Traits\EntrustUserTrait;

class User extends Authenticatable
{
    use Notifiable;
    use EntrustUserTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','slug',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function movies(){
        return $this->hasMany(Movie::class);
    }
    public function getRouteKeyName()
    {
        return 'slug';
    }
    public function images() {
        return $this->morphMany(Image::class, 'imageable');
    }
    public function ratings(){
        return $this->hasMany(Rating::class);
    }
  public function socialProviders(){
        return $this->hasMany(SocialProvider::class);
    }
    public function searches(){
        return $this->hasMany(Search::class);
    }
}
