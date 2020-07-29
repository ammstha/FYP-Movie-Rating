<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $table='tags';
    protected $fillable = [
        'name','slug',
    ];
    public function movies()
    {
        return $this->morphedByMany(Movie::class, 'taggable');
    }
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
