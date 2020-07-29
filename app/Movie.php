<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $table = 'movies';
    protected $fillable = [
        'movie_name', 'movie_details','feature_movie', 'running_time', 'release_date', 'slug', 'category_id', 'user_id'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

//    public function image()
//    {
//        return $this->morphOne(Image::class, 'imageable');
//    }
    public function image()
    {
        return $this->morphMany(Image::class, 'imageable');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function tags()
    {
        return $this->morphToMany(Tag::class, 'taggable');
    }
    public function getRouteKeyName()
    {
        return 'slug';
    }
    public function genres()
    {
        return $this->belongsToMany(Genre::class);
    }
    public function ratings()
    {
        return $this->hasMany(Rating::class, 'movie_id', 'id');
    }
    public function scopeCommingSoon($query, $comingSoon = true)
    {
        if ($comingSoon)
            return $query->where('release_date', '>=', date("Y-m-d"));
        return $query->where('release_date', '<', date("Y-m-d"));
    }
    public function hasRating(User $user) {
        return $this->ratings()->whereUserId($user->id)->first();
    }
    public function relatedPostsByTag()
    {
        return Movie::whereHas('tags', function ($query) {
            $tagIds = $this->tags()->pluck('tags.id')->all();
            $query->whereIn('tags.id', $tagIds);
        })->where('id', '<>', $this->id)->get();
    }
    public function scopeSearch($query,$q){
        return $query->where('movie_name','like','%'.$q.'%');
    }
    public function searches(){
        return $this->hasMany(Search::class);
    }
    public function recommendedMovies()
    {
        return Movie::whereHas('tags', function ($query) {
            $tagIds = $this->tags()->pluck('tags.id')->all();
            $query->whereIn('tags.id', $tagIds);
        })->get();
    }

}
