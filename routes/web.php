<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//
//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/', 'PageController@getIndex')->name('index');
Route::get('/movie-filter', 'PageController@getFilteredMovies')->name('movie-filter');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('users', 'UserController')->middleware('role:super-admin');

Route::middleware('role:admin|super-admin')->prefix('admin')->group(function () {
    Route::group(['middleware' => 'auth'], function () {

        Route::resource('tags', 'TagController');

        Route::resource('categories', 'CategoryController');

        Route::resource('genres', 'GenreController');

        Route::resource('movie', 'MovieController')->except('show');

        Route::resource('movie.rating', 'RatingController');

        Route::get('/dashboard', 'AdminController@getDashboard')->name('dashboard');

        Route::get('/feature', 'PageController@getFeatureMovie')->name('feature.movie');
        Route::get('/feature/{movie}', 'PageController@removeFeatureMovie')->name('update.feature.movie');

        Route::resource('setting', 'SettingController');

        Route::get('login', 'Auth\LoginController@showLoginForm1')->name('loginForm');
        Route::get('/movie1/{movie}', 'PageController@getMovie')->name('pages1.movie');


        Route::get('/yourActivity/{user}', 'UserSettingController@yourActivity')->name('yourActivity');

    });
});
Route::group(['middleware' => 'auth'], function () {
    Route::get('/accountSetting/{user}', 'UserSettingController@accountSetting')->name('accountSetting');
    Route::put('/updateName/{user}', 'UserSettingController@updateName')->name('update.setting.name');
    Route::put('/updateEmail/{user}', 'UserSettingController@updateEmail')->name('update.setting.email');
    Route::put('/updatePassword/{user}', 'UserSettingController@updatePassword')->name('update.setting.password');

    Route::put('userProfileImage/{user}', 'UserSettingController@userProfileUpdate')->name('user.Image');

    Route::get('/yourActivity/{user}', 'UserSettingController@yourActivity')->name('yourActivity');

});
Route::get('/movie/{movie}', 'PageController@getMovie')->name('pages.movie');

Route::get('/movieCategory/{category}', 'PageController@getCategoryMovie')->name('categories.movie');
Route::get('/movieGenre/{genre}', 'PageController@getGenreMovie')->name('genres.movie');
Route::get('/categoriesList/', 'PageController@getCategoriesList')->name('categories.list');
Route::get('/genresList/', 'PageController@getGenresList')->name('genres.list');

Route::get('contact', 'ContactController@show')->name('contact.show');
Route::post('contact','ContactController@create')->name('contact.create');

Route::get('about','PageController@getAboutPage')->name('pages.about');

Route::get('search','PageController@getSearch')->name('search.Movie');
Route::get('searchGo', 'PageController@getSearchGo')->name('searchGo');

Route::get('latestMovies', 'PageController@getLatestMovies')->name('latest.movies');
Route::get('comingSoonMovies', 'PageController@getComingSoonMovies')->name('comingSoon.movies');
Route::get('recommendedMovies', 'PageController@getRecommendedMovies')->name('recommended.movies');


Route::get('auth/{provider}', 'Auth\LoginController@redirectToProvider');
Route::get('auth/{provider}/callback', 'Auth\LoginController@handleProviderCallback');