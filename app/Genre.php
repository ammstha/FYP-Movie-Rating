<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    protected $table='genres';
    protected $fillable = ['name','slug'];

    public function movies()
    {
        return $this->belongsToMany(Movie::class);
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
