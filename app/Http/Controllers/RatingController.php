<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRating;
use App\Movie;
use App\Rating;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Session;

class RatingController extends Controller
{

    public function store(StoreRating $request, Movie $movie)
    {
        DB::transaction(function ()use($request,$movie){
            $data = $request->data();

            $rating=$movie->ratings()->where('user_id',auth()->id())->first();

            if ($rating) {
                $rating->update($data);
            } else {
                $movie->ratings()->create($data);
            }
        });

        Session::flash('success', 'Rating was successfully created');
        return redirect()->route('pages.movie',$movie->slug);

    }

}
