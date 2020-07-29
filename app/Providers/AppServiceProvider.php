<?php

namespace App\Providers;

use App\Category;
use App\Genre;
use App\Setting;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use View;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        $categories = Category::inRandomOrder()->take(5)->get();
        $genres = Genre::inRandomOrder()->take(5)->get();
        $facebook=Setting::where('slug', '=', 'facebook')->first();
        $twitter=Setting::where('slug','=','twitter')->first();
        $instagram=Setting::where('slug','=','instagram')->first();

        View::share('categories',$categories);
        View::share('genres',$genres);
        View::share('facebook',$facebook);
        View::share('twitter',$twitter);
        View::share('instagram',$instagram);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
