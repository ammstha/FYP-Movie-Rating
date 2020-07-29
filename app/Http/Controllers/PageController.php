<?php

namespace App\Http\Controllers;

use App\Category;
use App\Genre;
use App\Movie;
use App\Rating;
use App\Search;
use App\User;
use Illuminate\Http\Request;
use Auth;
use Session;
use URL;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    public function getIndex(Movie $movie, User $user, Request $request)
    {
        $movies = Movie::orderBy('release_date', 'desc')->commingSoon(false)->take(8)->get();
        $commingSoonMovies = Movie::orderBy('release_date', 'desc')->commingSoon()->take(8)->get();
        $averageRating = $movie->ratings()->avg('rating');
        $featureMovies = Movie::where('feature_movie', '=', 1)->get();
        if (auth()->user()) {
            $recommendMovies = collect([]);
            $recommendedMovies = auth()->user()->searches()->with('movie')->take(2)->latest()->get()->pluck('movie');

            foreach ($recommendedMovies as $movie) {
                foreach ($movie->recommendedMovies() as $m ) {
                    $recommendMovies->push($m);
                }
            }
        } else {
            $recommendMovies = Movie::orderBy('release_date', 'desc')->commingSoon(false)->take(4)->get();
        }
//        dd($recommendedMovies);
        return view('pages.index', compact('movies', 'commingSoonMovies', 'averageRating', 'user', 'topRatedMovies', 'featureMovies', 'recommendMovies'));
    }

    public function getFilteredMovies(Request $request)
    {
        $filter = $request->get('filter', 'all');

        if ($filter == 'all') {
            $movies = Movie::all()->sortByDesc(function ($movie) {
                $movie->ratings()->avg('rating');
            });
        } else {
            $movies = Movie::whereHas('genres', function ($q) use ($filter) {
                $q->where('slug', strtolower($filter));
            })->get()->sortByDesc(function ($movie) {
                $movie->ratings()->avg('rating');
            });
        }

        return view('pages.genre', compact('movies'));
    }

    public function getMovie(Request $request, Movie $movie)
    {
        if ($request->has('ref') && auth()->user()) {
            $data = [
                'movie_id' => $movie->id,
                'user_id' => auth()->user()->id,
            ];
            Search::create($data);

        }
        Session::put('url.intended', URL::full());
        return view('pages.show', compact('movie'));
    }

    public function getFeatureMovie()
    {
        $featureMovies = Movie::where('feature_movie', '=', 1)->get();
        return view('featureMovie.index', compact('featureMovies'));
    }

    public function removeFeatureMovie(Request $request, Movie $movie)
    {
        $featureValue = [
            'feature_movie' => 0,
        ];
        $movie->update($featureValue);
        return redirect()->route('feature.movie');
    }

    public function getCategoryMovie(Category $category)
    {
        return view('pages.categoryMovies', compact('category'));
    }

    public function getGenreMovie(Genre $genre)
    {
        return view('pages.genreMovies', compact('genre'));
    }

    public function getCategoriesList()
    {
        $categories = Category::all();
        return view('pages.categoriesList', compact('categories'));
    }

    public function getGenresList()
    {
        $genres = Genre::all();
        return view('pages.genresList', compact('genres'));
    }

    public function getAboutPage()
    {
        return view('pages.about');
    }

    public function getSearch(Request $request)
    {
        $term = $request->input('term');
        $data = Movie::where('movie_name', 'LIKE', '%' . $term . '%')
            ->take(3)
            ->get();
        $result = array();
        foreach ($data as $key => $v) {
            $result[] = ['id' => $v->id, 'value' => $v->movie_name, 'url' => route('pages.movie', ['movie' => $v->slug, 'ref' => 'search'])];
        }
        return response()->json($result);
    }

    public function getSearchGo(Request $request)
    {
        $q = $request->get('q');
        $movies = Movie::latest()->search($q)->paginate(2);
        return view('pages.searchResult', compact('movies', 'q'));
    }

    public function getLatestMovies()
    {
        $latestMovies = Movie::orderBy('release_date', 'desc')->commingSoon(false)->paginate(8);
        return view('pages.latestMovie', compact('latestMovies'));
    }

    public function getComingSoonMovies()
    {
        $comingSoonMovie = Movie::orderBy('release_date', 'desc')->commingSoon()->paginate(8);
        return view('pages.comingSoonMovie', compact('comingSoonMovie'));
    }

    public function getRecommendedMovies(){
        if (auth()->user()) {
            $recommendMovies = collect([]);
            $recommendedMovies = auth()->user()->searches()->with('movie')->take(2)->latest()->get()->pluck('movie');

            foreach ($recommendedMovies as $movie) {
                foreach ($movie->recommendedMovies() as $m ) {
                    $recommendMovies->push($m);
                }
            }
        } else {
            $recommendMovies = Movie::orderBy('release_date', 'desc')->commingSoon(false)->get();
        }
        return view('pages.recommendedMovie',compact('recommendMovies'));
    }


}
