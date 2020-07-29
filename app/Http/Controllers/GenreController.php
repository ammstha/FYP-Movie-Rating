<?php

namespace App\Http\Controllers;

use App\Genre;
use App\Http\Requests\StoreGenre;
use App\Http\Requests\UpdateGenre;
use Session;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function index()
    {
        $genres = Genre::latest()->paginate(5);
        return view('genre.index', compact('genres'));
    }

    public function store(StoreGenre $request)
    {
        try
        {
            $data = $request->data();
            Genre::create($data);
            Session::flash('success', 'New Genre was successfully created!');
        }
        catch(\Exception $e)
        {
            Session::flash('fail', 'Genre already exist');
        }

        return redirect()->route('genres.index');
    }

    public function update(UpdateGenre $request, Genre $genre)
    {
        $data = $request->data();
        $genre->update($data);
        return redirect()->route('genres.index');
    }

    public function destroy($id)
    {
        $genre = Genre::find($id);
        $genre->delete();
        return redirect()->route('genres.index');
    }
}
