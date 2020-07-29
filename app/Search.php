<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Search extends Model
{
    protected $fillable = [
       'movie_id', 'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function movie()
    {
        return $this->belongsTo(Movie::class);
    }

}
