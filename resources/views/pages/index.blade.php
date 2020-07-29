{{--<!DOCTYPE html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--<title>Bootstrap Example</title>--}}
{{--<meta charset="utf-8">--}}
{{--<meta name="viewport" content="width=device-width, initial-scale=1">--}}
{{--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">--}}
{{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>--}}
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>--}}
{{--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>--}}
{{--</head>--}}
{{--<body>--}}

{{--<nav class="navbar navbar-expand-md bg-dark navbar-dark">--}}
{{--<a class="navbar-brand" href="#">Navbar</a>--}}
{{--<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">--}}
{{--<span class="navbar-toggler-icon"></span>--}}
{{--</button>--}}
{{--<div class="collapse navbar-collapse" id="collapsibleNavbar">--}}
{{--<ul class="navbar-nav">--}}
{{--<li class="nav-item">--}}
{{--<a class="nav-link" href="#">Link</a>--}}
{{--</li>--}}
{{--<li class="nav-item">--}}
{{--<a class="nav-link" href="#">Link</a>--}}
{{--</li>--}}

{{--<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Categories<span--}}
{{--class="caret"></span></a>--}}
{{--<ul class="dropdown-menu">--}}
{{--@if($categories->count() < 5 )--}}
{{--@foreach($categories as $category)--}}
{{--<li><a href="{{route('categories.movie',$category->slug)}}">{{$category->name}}</a></li>--}}
{{--@endforeach--}}
{{--@else--}}
{{--@foreach($categories as $category)--}}
{{--<li><a href="{{route('categories.movie',$category->slug)}}">{{$category->name}}</a></li>--}}
{{--@endforeach--}}
{{--<li><a href="{{route('categories.list')}}">Show all</a></li>--}}
{{--@endif--}}
{{--</ul>--}}
{{--</li>--}}
{{--<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Genre<span--}}
{{--class="caret"></span></a>--}}
{{--<ul class="dropdown-menu">--}}
{{--@if($genres->count() < 5 )--}}
{{--@foreach($genres as $genre)--}}
{{--<li><a href="{{route('genres.movie',$genre->slug)}}">{{$genre->name}}</a></li>--}}
{{--@endforeach--}}
{{--@else--}}
{{--@foreach($genres as $genre)--}}
{{--<li><a href="{{route('genres.movie',$genre->slug)}}">{{$genre->name}}</a></li>--}}
{{--@endforeach--}}
{{--<li><a href="{{route('genres.list')}}">Show all</a></li>--}}
{{--@endif--}}
{{--</ul>--}}
{{--</li>--}}
{{--@guest--}}
{{--<a href="{{ route('login') }}">--}}
{{--<button>Sign In</button>--}}
{{--</a>--}}
{{--<a href="{{ route('register') }}">--}}
{{--<button>Join</button>--}}
{{--</a>--}}
{{--@else--}}
{{--<li class="dropdown">--}}
{{--<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"--}}
{{--aria-expanded="false" aria-haspopup="true">--}}
{{--{{ Auth::user()->name }} <span class="caret"></span>--}}
{{--</a>--}}

{{--<ul class="dropdown-menu">--}}
{{--<li><a href="{{route('accountSetting',auth()->user()->slug)}}">Account Setting</a>--}}
{{--<li><a href="{{route('yourActivity',auth()->user()->slug)}}">Your Activity</a>--}}
{{--</li>--}}
{{--<li>--}}
{{--<a href="{{ route('logout') }}"--}}
{{--onclick="event.preventDefault();--}}
{{--document.getElementById('logout-form').submit();">--}}
{{--Logout--}}
{{--</a>--}}

{{--<form id="logout-form" action="{{ route('logout') }}" method="POST"--}}
{{--style="display: none;">--}}
{{--{{ csrf_field() }}--}}
{{--</form>--}}
{{--</li>--}}
{{--</ul>--}}
{{--</li>--}}
{{--@endguest--}}
{{--</ul>--}}
{{--</div>--}}
{{--</nav>--}}
{{--<br>--}}

{{--<div class="container">--}}
{{--<h3>Latest Movies</h3>--}}
{{--<div class="row">--}}
{{--@foreach($movies as $movie)--}}
{{--<div class="col-md-3">--}}
{{--@if($image = $movie->image()->where('meta','Poster_Image')->first())--}}
{{--<img src="{{asset($image->url) }}" class="" height="300px" width="200px" align="middle">--}}
{{--@endif<br>--}}


{{--<a href="{{route('pages.movie', $movie->slug)}}">--}}
{{--<h2> {{$movie->movie_name}}</h2>--}}
{{--</a>--}}
{{--<p> {{$movie->release_date}}<p>--}}
{{--@if($movie->ratings()->avg('rating'))--}}
{{--{{number_format($movie->ratings()->avg('rating'),1)}}/5--}}
{{--@endif--}}

{{--</div>--}}
{{--@endforeach--}}
{{--</div>--}}
{{--<h3>Coming Soon</h3>--}}
{{--<div class="row">--}}
{{--@foreach($commingSoonMovies as $movie)--}}
{{--<div class="col-md-3">--}}
{{--@if($image = $movie->image()->where('meta','Poster_Image')->first())--}}
{{--<img src="{{asset($image->url) }}" class="" height="300px" width="200px" align="middle">--}}
{{--@endif<br>--}}

{{--<a href="{{route('pages.movie', $movie->slug)}}">--}}
{{--<h2> {{$movie->movie_name}}</h2>--}}
{{--</a>--}}
{{--<p> {{$movie->release_date}}<p>--}}

{{--</div>--}}
{{--@endforeach--}}
{{--</div>--}}
{{--<h3>Top Rated Movie</h3>--}}
{{--<div class="top-rated">--}}
{{--<ul>--}}
{{--<li class="d-inline"><a class="toprated" href="javascript:void(0)" data-filter="all">All</a></li>--}}
{{--<li class="d-inline"><a class="toprated" href="javascript:void(0)" data-filter="action">Acion</a></li>--}}
{{--<li class="d-inline"><a class="toprated" href="javascript:void(0)" data-filter="Comedy">Comedy</a></li>--}}
{{--</ul>--}}
{{--</div>--}}

{{--<div id="content"></div>--}}
{{--</div>--}}
{{--<script>--}}
{{--function filter(filter) {--}}
{{--$.ajax({--}}
{{--type: 'GET',--}}
{{--data: {filter: filter, _token: '{{ csrf_token() }}'},--}}
{{--url: '{{ route( 'movie-filter') }}',--}}
{{--success: function (content) {--}}
{{--$("#content").html(content);--}}
{{--},--}}
{{--error: function (e) {--}}
{{--console.log('error', e)--}}
{{--}--}}
{{--})--}}
{{--}--}}

{{--$(document).ready(function () {--}}
{{--filter('all');--}}
{{--$(document).on('click', '.toprated', function () {--}}
{{--var f = $(this).data('filter');--}}
{{--filter(f);--}}
{{--});--}}
{{--});--}}
{{--</script>--}}
{{--</body>--}}
{{--</html>--}}


@extends('front.layout.app')
@section('content')
    <div class="container-fluid">
        {{--Carosel Feature Movie--}}
        <div class="row">
            <div id="carouselExampleIndicators" class="carousel slide w-100" data-ride="carousel">
                <ol class="carousel-indicators">
                    @foreach($featureMovies as $key => $featureMovie)
                        <li data-target="#home_main-slider" data-slide-to="{{$key}}" class="carousel-1">
                        </li>
                    @endforeach
                </ol>
                <div class="carousel-inner position-relative">
                    @foreach($featureMovies as $featureMovie)
                        @if($loop->first)
                            <div class="carousel-item slider-container active">
                                @else
                                    <div class="carousel-item slider-container">
                                        @endif

                                        @if($image = $featureMovie->image()->where('meta','Cover_Image')->first())
                                            <img src="{{asset($image->url) }}" class="d-block w-100 slider-image">
                                        @endif

                                        {{--<img class="d-block w-100 slider-image position-relative" src="images/1.jpg" alt="First slide">--}}
                                        <div class="container caption-container">
                                            <div class="row">
                                                <div class="carousel-details_container">
                                                    <h3 class="text-white">{{$featureMovie->movie_name}}</h3>
                                                    {{--<div class="carousel-details_content">{!! $featureMovie->movie_details !!}</div>--}}
                                                    <div class="carousel-details_content">{!! substr($featureMovie->movie_details, 0, 200) !!}{{strlen($featureMovie->movie_details) > 200 ? '...' : "" }}</div>
                                                    {{--{{ substr($post->body, 0, 250) }}{{ strlen($post->body) > 250 ? '...' : "" }}--}}
                                                    <a type="button" class="btn carousel-details_button px-4 mt-2"
                                                       href="{{route('pages.movie', $featureMovie->slug)}}">Show
                                                        More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                               data-slide="prev">

                                <i class="icon-arrow-left weight-bold"></i>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                               data-slide="next">
                                <i class="icon-arrow-right weight-bold"></i>
                            </a>
                </div>
            </div>
        </div>
        <div class="container mt-4">

            {{--Top Rated Movies--}}
            <div class="row">
                <div class="col-md-12">
                    <h3>Top Rated Movies</h3>
                </div>
            </div>
            <div class="top-rated">
                <ul>
                    <li class="list-inline-item genre-active"><a class="toprated text-dark" href="javascript:void(0)"
                                                                 data-filter="all">All</a></li>
                    <li class="list-inline-item"><a class="toprated text-dark" href="javascript:void(0)"
                                                    data-filter="action">Action</a></li>
                    <li class="list-inline-item"><a class="toprated text-dark" href="javascript:void(0)"
                                                    data-filter="Comedy">Comedy</a></li>
                </ul>
            </div>
            <div id="content"></div>

            {{--Latest Movies--}}
            <div class="row">
                <div class="col-md-12 d-flex justify-content-between">
                    <h3>Latest Movies</h3>
                    <a type="button" href="{{route('latest.movies')}}" class="btn  btn-outline-dark btn-sm  d-flex align-items-center">
                        Show all
                    </a>
                </div>
            </div>
            <div class="row mt-3">
                @foreach($movies as $movie)
                    <div class="col-lg-3 col-md-6 mb-4">
                        <a href="{{route('pages.movie', $movie->slug)}}">
                            <figure class="featured-movie_container effect-honey">
                                @if($image = $movie->image()->where('meta','Poster_Image')->first())
                                    <img src="{{asset($image->url) }}" class="img-fluid featured-movie_image" alt="">
                                @endif<br>
                                <img src="images/featured-1.jpg" class="img-fluid featured-movie_image" alt="">
                                <figcaption class="featured-movie_details_container">
                                    <div class="featured-movie_details">
                                        <div class="ratings">
                                            <i class="fas fa-star mr-2"></i>
                                            @if($movie->ratings()->avg('rating'))
                                                {{number_format($movie->ratings()->avg('rating'),1)}}/5
                                            @endif
                                        </div>
                                        <div class="description">
                                            <h2 class="mb-0 ">{{$movie->movie_name}}</h2>
                                            {{--<p class="mb-0">Genre</p>--}}
                                        </div>
                                    </div>
                                </figcaption>
                            </figure>
                        </a>
                    </div>
                @endforeach
            </div>

            {{--Coming Soon Movies--}}
            <div class="row">
            <div class="col-md-12 d-flex justify-content-between">
                <h3>Coming Soon Movies</h3>
                <a type="button" href="{{route('comingSoon.movies')}}" class="btn  btn-outline-dark btn-sm  d-flex align-items-center">
                    Show all
                </a>
            </div>
            </div>
            <div class="row mt-3">
                @foreach($commingSoonMovies as $movie)
                    <div class="col-lg-3 col-md-6 mb-4">
                        <a href="{{route('pages.movie', $movie->slug)}}">
                            <figure class="featured-movie_container effect-honey">
                                @if($image = $movie->image()->where('meta','Poster_Image')->first())
                                    <img src="{{asset($image->url) }}" class="img-fluid featured-movie_image" alt="">
                                @endif<br>
                                <img src="images/featured-1.jpg" class="img-fluid featured-movie_image" alt="">
                                <figcaption class="featured-movie_details_container">
                                    <div class="featured-movie_details">
                                        <div class="description">
                                            <h2 class="mb-0 ">{{$movie->movie_name}}</h2>
                                        </div>
                                    </div>
                                </figcaption>
                            </figure>
                        </a>
                    </div>
                @endforeach
            </div>


            <div class="row">
                <div class="col-md-12 d-flex justify-content-between">
                    <h3>Recommended Movie</h3>
                    <a type="button" href="{{route('recommended.movies')}}" class="btn btn-outline-dark btn-sm  d-flex align-items-center">
                        Show all
                    </a>
                </div>
            </div>
            <div class="row mt-3">
                @foreach($recommendMovies->unique('slug')->take(4) as $movie)
                    <div class="col-lg-3 col-md-6 mb-4">
                        <a href="{{route('pages.movie', $movie->slug)}}">
                            <figure class="featured-movie_container effect-honey">
                                @if($image = $movie->image()->where('meta','Poster_Image')->first())
                                    <img src="{{asset($image->url) }}" class="img-fluid featured-movie_image" alt="">
                                @endif<br>
                                <img src="images/featured-1.jpg" class="img-fluid featured-movie_image" alt="">
                                <figcaption class="featured-movie_details_container">
                                    <div class="featured-movie_details">
                                        <div class="description">
                                            <h2 class="mb-0 ">{{$movie->movie_name}}</h2>
                                        </div>
                                    </div>
                                </figcaption>
                            </figure>
                        </a>
                    </div>
                @endforeach
            </div>

        </div>
    </div>
@endsection

@push('scripts')
    <script>
        function filter(filter) {
            $.ajax({
                type: 'GET',
                data: {filter: filter, _token: '{{ csrf_token() }}'},
                url: '{{ route( 'movie-filter') }}',
                success: function (content) {
                    $("#content").html(content);
                },
                error: function (e) {
                    console.log('error', e)
                }
            })
        }

        $(document).ready(function () {
            filter('all');
            $(document).on('click', '.toprated', function () {
                var f = $(this).data('filter');
                filter(f);
                $(this).closest('ul').find('li').removeClass('genre-active');
                $(this).parent().addClass('genre-active');
            });
        });
    </script>
@endpush


