<?php

namespace App\Http\Controllers;

use App\Category;
use App\Genre;
use App\Movie;
use App\Role;
use App\Tag;
use App\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function getDashboard()
    {
        $movieCount = Movie::count();
        $featureMovieCount = Movie::where('feature_movie', '=', 1)->count();
        $categoryCount = Category::count();
        $genreCount = Genre::count();
        $tagCount = Tag::count();
        $adminCount = User::whereHas('roles', function ($q) {
            $q->where('name', 'admin');
        })->count();
        $CustomerCount = User::whereHas('roles', function ($q) {
            $q->where('name', 'customer');
        })->count();

        return view('admin.dashboard', compact('movieCount',
            'featureMovieCount', 'categoryCount', 'genreCount', 'tagCount', 'adminCount', 'CustomerCount'));
    }
}
