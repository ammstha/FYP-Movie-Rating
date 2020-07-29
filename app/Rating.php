<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    protected $table = 'ratings';
    protected $fillable = [
       'movie_id', 'user_id','rating','rating_description',
    ];

    public function movie()
    {
        return $this->belongsTo(Movie::class, 'movie_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
