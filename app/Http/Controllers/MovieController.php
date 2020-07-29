<?php

namespace App\Http\Controllers;

use App\Category;
use App\Genre;
use App\Http\Requests\StoreMovie;
use App\Http\Requests\UpdateMovie;
use App\Image;
use App\Movie;
use App\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Purifier;

class MovieController extends Controller
{

    public function index()
    {
        $movies = Movie::latest()->paginate(5);
        return view('movie.index',compact('movies'));
    }

    public function create()
    {
        $categories = Category::all();
        $tags = Tag::all();
        $genres=Genre::all();
        return view('movie.create',compact('categories','tags','genres'));

    }

    public function store(StoreMovie $request)
    {
        try
        {
            //Poster Image
            $posterFile = $request->file('poster_image');
            $posterFilenameWithExt = $posterFile->getClientOriginalName();
            $posterFilename = pathinfo($posterFilenameWithExt, PATHINFO_FILENAME);
            $extension = $posterFile->getClientOriginalExtension();
            $posterFileNameToStore= $posterFilename.'_'.time().'.'.$extension;

            //Cover Image
            $coverFile = $request->file('cover_image');
            $coverFilenameWithExt = $coverFile->getClientOriginalName();
            $coverFilename = pathinfo($coverFilenameWithExt, PATHINFO_FILENAME);
            $extension = $coverFile->getClientOriginalExtension();
            $coverFileNameToStore= $coverFilename.'_'.time().'.'.$extension;

            $posterdata = [
                'image' => $posterFilename,
                'path' => $posterFile->storeAs('poster', $posterFileNameToStore, 'public'),
                'meta' => 'Poster_Image',
            ];
            $coverdata = [
                'image' => $coverFilename,
                'path' => $coverFile->storeAs('cover', $coverFileNameToStore, 'public'),
                'meta' => 'Cover_Image',
            ];
            $moviedata=[
                'movie_name'=>$request->get('movie_name'),
                'movie_details'=>Purifier::clean($request->get('movie_details')),
                'feature_movie'=>$request->has('feature_movie') ? true:false,
                'running_time'=>$request->get('running_time'),
                'release_date'=>$request->get('release_date'),
                'slug'=>str_slug($request->get('movie_name')),
                'category_id' => $request->get('category_id'),
                'genre_id' => $request->get('genre_id'),
            ];
            $m = auth()->user()->movies()->create($moviedata);
            $m->image()->create($posterdata);
            $m->image()->create($coverdata);
            $m->tags()->sync($request->get('tags'));
            $m->genres()->sync($request->get('genres'));
            return redirect()->route('movie.index', auth()->user()->id);
            Session::flash('success', 'Movie was successfully created');
        }
        catch(\Exception $e)
        {
            Session::flash('fail', 'Movie already exist');
        }

    }


    public function show($id)
    {
        //
    }

    public function edit(Movie $movie)
    {
        $categories = Category::all();
        $cats = array();
        foreach ($categories as $category) {
            $cats[$category->id] = $category->name;
        }

        $tags = Tag::all();
        $tags2 = array();
        foreach ($tags as $tag) {
            $tags2[$tag->id] = $tag->name;
        }

        $genres = Genre::all();
        $genres2 = array();
        foreach ($genres as $genre) {
            $genres2[$genre->id] = $genre->name;
        }
        $poster_image=$movie->image->where('meta','=','Poster_Image')->first();
        $cover_image=$movie->image->where('meta','=','Cover_Image')->first();
        return view('movie.edit', compact('movie','cats','tags2','genres2','poster_image','cover_image'));
    }


    public function update(UpdateMovie $request,Movie $movie)
    {

        $posterdata = false;
        $coverdata=false;

            //Poster Image
        if($request->file('poster_image')) {
            $posterFile = $request->file('poster_image');
            $posterFilenameWithExt = $posterFile->getClientOriginalName();
            $posterFilename = pathinfo($posterFilenameWithExt, PATHINFO_FILENAME);
            $extension = $posterFile->getClientOriginalExtension();
            $posterFileNameToStore = $posterFilename . '_' . time() . '.' . $extension;
            $posterdata = [
                'image' => $posterFilename,
                'path' => $posterFile->storeAs('poster', $posterFileNameToStore, 'public'),
                'meta' => 'Poster_Image',
            ];
        }
        if($request->file('cover_image')) {
            //Cover Image
            $coverFile = $request->file('cover_image');
            $coverFilenameWithExt = $coverFile->getClientOriginalName();
            $coverFilename = pathinfo($coverFilenameWithExt, PATHINFO_FILENAME);
            $extension = $coverFile->getClientOriginalExtension();
            $coverFileNameToStore = $coverFilename . '_' . time() . '.' . $extension;
            $coverdata = [
                'image' => $coverFilename,
                'path' => $coverFile->storeAs('cover', $coverFileNameToStore, 'public'),
                'meta' => 'Cover_Image',
            ];
        }


        $moviedata=[
            'movie_name'=>$request->get('movie_name'),
            'movie_details'=>Purifier::clean($request->get('movie_details')),
            'feature_movie'=>$request->has('feature_movie') ? true:false,
            'running_time'=>$request->get('running_time'),
            'release_date'=>$request->get('release_date'),
            'slug'=>str_slug($request->get('movie_name')),
            'category_id' => $request->get('category_id'),
//            'genre_id' => $request->get('genre_id'),
        ];
        $movie->update($moviedata);
        if ($posterdata) {
            $movie->image()->where('meta','=','Poster_Image')->update($posterdata);
        }
        if ($coverdata ) {
            $movie->image()->where('meta','=','Cover_Image')->update($coverdata);
        }

        if (isset($request->tags)) {
            $movie->tags()->sync($request->tags);
        } else {
            $movie->tags()->sync(array());
        }
        if (isset($request->genres)) {
            $movie->genres()->sync($request->gernes);
        } else {
            $movie->genres()->sync(array());
        }
        return redirect()->route('movie.index', auth()->user()->id);
    }


    public function destroy($id)
    {
        $movie =Movie::find($id);
        $movie->image()->delete();
        $movie->ratings()->delete();
        $movie->tags()->detach();
        $movie->genres()->detach();
        $movie->delete();
        Storage::delete($movie);
        return redirect()->route('movie.index');
    }
}
