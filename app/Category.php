<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table='categories';
    protected $fillable = [
        'name','slug',
    ];

    public function movies(){
        return $this->hasMany(Movie::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function getNameAttribute($value)
    {
        return ucfirst($value);
    }
}
