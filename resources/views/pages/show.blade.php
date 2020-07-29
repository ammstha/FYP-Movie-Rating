{{--<!DOCTYPE html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--<title>Bootstrap Example</title>--}}
{{--<meta charset="utf-8">--}}
{{--<meta name="viewport" content="width=device-width, initial-scale=1">--}}
{{--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">--}}
{{--<link href="{{asset('star_rating/themes/css-stars.css')}}" rel="stylesheet"/>--}}
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
{{--<li class="nav-item">--}}
{{--<a class="nav-link" href="#">Link</a>--}}
{{--</li>--}}
{{--</ul>--}}
{{--</div>--}}
{{--</nav>--}}
{{--<br>--}}

{{--<div class="container">--}}
{{--<div class="row">--}}
{{--<div class="col-md-3">--}}
{{--@if($image = $movie->image()->where('meta','Poster_Image')->first())--}}
{{--<img src="{{asset($image->url) }}" class="" height="auto" width="100%">--}}
{{--@endif--}}
{{--</div>--}}

{{--<div class="col-md-9">--}}

{{--@if($image = $movie->image()->where('meta','Cover_Image')->first())--}}
{{--<img src="{{asset($image->url) }}" class="" height="auto" width="100%">--}}
{{--@endif--}}
{{--<h2> {{$movie->movie_name}}</h2>--}}
{{--<p>Average Rating: {{$averageRating}}/5</p>--}}
{{--<p>Total Rating: {{ $movie->ratings()->count() }} Ratings</p>--}}
{{--<div>Tags:--}}
{{--@foreach ($movie->tags as $tag)--}}
{{--<span class="badge badge-info">{{ $tag->name }}</span>--}}
{{--@endforeach--}}
{{--</div>--}}
{{--<div>Genres:--}}
{{--@foreach ($movie->genres as $genre)--}}
{{--<span class="badge badge-info">{{ $genre->name }}</span>--}}
{{--@endforeach--}}
{{--</div>--}}
{{--<div>--}}
{{--Category:{{$movie->category->name}}--}}
{{--</div>--}}
{{--Movie Rating--}}
{{--@if( $movie->hasRating(auth()->user()))--}}
{{--<div>--}}
{{--@if(auth()->user())--}}
{{--<p>Your Rating:<p>--}}
{{--@else--}}
{{--<p>Rate This:</p>--}}
{{--</div>--}}
{{--@endif--}}
{{--<div class="d-inline">--}}
{{--<div class="stars stars-example-css">--}}
{{--<select class="example-css" name="rating" autocomplete="off">--}}
{{--@for ($i = 1; $i <=5; $i++)--}}
{{--<option value="{{ $i }}" {{ auth()->check() && $movie->hasRating(auth()->user()) && $movie->hasRating(auth()->user())->rating == $i ? 'selected':'' }}>{{ $i }}</option>--}}
{{--@endfor--}}
{{--</select>--}}
{{--</div>--}}
{{--</div>--}}
{{--<p>{!! $movie->movie_details !!}--}}


{{--Movie Rating and Review--}}
{{--<div>--}}
{{--<h4>Review</h4>--}}
{{--@if(auth()->check())--}}
{{--<a type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target="#myModal">--}}
{{--Write Review--}}
{{--</a>--}}
{{--@else--}}
{{--<a href="{{route('login')}}" class="btn btn-primary pull-right">--}}
{{--Write Review--}}
{{--</a>--}}
{{--@endif--}}

{{--<!-- The Modal -->--}}
{{--<div class="modal fade" id="myModal">--}}
{{--<div class="modal-dialog">--}}
{{--<div class="modal-content">--}}

{{--<!-- Modal Header -->--}}
{{--<div class="modal-header">--}}
{{--@if(auth()->check())--}}
{{--<h4 class="modal-title">Reviewd by {{auth()->user()->name}}</h4>--}}
{{--@endif--}}
{{--<button type="button" class="close" data-dismiss="modal">&times;</button>--}}
{{--</div>--}}

{{--<!-- Modal body -->--}}
{{--<div class="modal-body">--}}

{{--{!! Form::open(['url' => route( 'movie.rating.store',$movie->slug),'method'=>'POST','enctype'=>'multipart/form-data']) !!}--}}
{{--<div class="form-group">--}}
{{--<label for="comment">Review</label>--}}
{{--<textarea class="form-control" rows="5" name="rating_description"--}}
{{--id="comment"></textarea>--}}

{{--<div>--}}
{{--@if(auth()->check())--}}
{{--<div class="stars stars-example-css">--}}
{{--<select class="example-css" name="rating" autocomplete="off">--}}
{{--@for ($i = 1; $i <=5; $i++)--}}
{{--<option value="{{ $i }}" {{ $movie->hasRating(auth()->user()) && $movie->hasRating(auth()->user())->rating == $i ? 'selected':'' }}>{{ $i }}</option>--}}
{{--@endfor--}}
{{--</select>--}}
{{--</div>--}}
{{--@endif--}}
{{--</div>--}}
{{--</div>--}}
{{--{{ Form::submit('Submit', ['class' => 'btn btn-primary btn-block btn-h1-spacing']) }}--}}

{{--{!! Form::close() !!}--}}
{{--</div>--}}

{{--<!-- Modal footer -->--}}
{{--<div class="modal-footer">--}}
{{--<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>--}}
{{--</div>--}}

{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--User Review--}}
{{--<div>--}}

{{--@foreach($movie->ratings as $rating)--}}
{{--@if( $rating->rating_description)--}}
{{--{{ $rating->rating }}<br>--}}
{{--{{ $rating->rating_description }}<br>--}}
{{--{{$rating->user->name}}<br>--}}
{{--@endif--}}

{{--@endforeach--}}
{{--</div>--}}
{{--</div>--}}


{{--</div>--}}
{{--</div>--}}
{{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>--}}
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>--}}
{{--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>--}}

{{--<script src="{{ asset('star_rating/jquery-1.11.2.min.js') }}"></script>--}}
{{--<script src="{{ asset('star_rating/jquery.barrating.js') }}"></script>--}}
{{--<script src="{{ asset('star_rating/examples.js') }}"></script>--}}
{{--<script>--}}
{{--$(document).ready(function () {--}}
{{--var loggedOn = {{ auth()->check() ? 'true':'false' }};--}}
{{--$(document).on('change', '.example-css', function () {--}}
{{--if (!loggedOn)--}}
{{--window.location = '{{ url('login') }}';--}}

{{--$.ajax({--}}
{{--type: 'POST',--}}
{{--data: {rating: $(this).val(), _token: '{{ csrf_token() }}'},--}}
{{--url: '{{ route( 'movie.rating.store', $movie->slug) }}',--}}
{{--success: function (response) {--}}
{{--//                   alert('submitted');--}}
{{--console.log('success', response);--}}
{{--},--}}
{{--error: function (e) {--}}
{{--console.log('error', e)--}}
{{--}--}}
{{--})--}}
{{--});--}}
{{--});--}}
{{--</script>--}}
{{--</body>--}}
{{--</html>--}}


@extends('front.layout.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 p-0">
                <div class="cover-image_container">
                    @if($image = $movie->image()->where('meta','Poster_Image')->first())
                        <img src="{{asset($image->url) }}" class="cover-image">
                    @endif
                    <img src="../images/movie-cover.jpg" alt="" class="cover-image">

                    <div class="container movie-content_container">
                        <div class="row">
                            <div class="col-lg-9 offset-lg-3">
                                <h1 class="display-4 text-white movie-title">{{$movie->movie_name}}</h1>
                                <div class="movie-content_ratings text-white mt-4">
                                    @if(auth()->user())
                                        @if( $movie->hasRating(auth()->user()))
                                            Your Rating:
                                        @else
                                            Rate This movie:
                                        @endif
                                    @else
                                        Rate This movie:
                                    @endif
                                        <div class="d-inline">
                                            <div class="stars stars-example-css">
                                                <select class="example-css" name="rating" autocomplete="off">
                                                    @for ($i = 1; $i <=5; $i++)
                                                        <option value="{{ $i }}" {{ auth()->check() && $movie->hasRating(auth()->user()) && $movie->hasRating(auth()->user())->rating == $i ? 'selected':'' }}>{{ $i }}</option>
                                                    @endfor
                                                </select>
                                            </div>
                                        </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            {{--Movie info--}}
            <div class="col-lg-3">
                <div class="movie-image_container">
                    @if($image = $movie->image()->where('meta','Poster_Image')->first())
                        <img src="{{asset($image->url) }}" class="movie-image">
                    @endif
                    <img src="../images/movie-image.jpg" alt="" class="movie-image">
                </div>
                <div class="movie-info mt-4">
                    <h2>Movie Info</h2>
                    <ul class="list-unstyled">

                        <li>
                            <i class="fas fa-star mr-2 yellow-text"></i>
                            @if($movie->ratings()->avg('rating'))
                                {{number_format($movie->ratings()->avg('rating'),1)}}/5
                            @endif
                            |<i class="fas fa-user"></i>
                            {{ $movie->ratings()->count() }}


                        </li>
                        <li>
                            <b>Release Date:</b> {{$movie->release_date}}
                        </li>
                        <li>
                            <b>Categories:</b> {{$movie->category->name}}
                        </li>
                        <li>
                            <b>Running Time:</b> {{$movie->running_time}}m
                        </li>
                        <li>
                            <b>Tags:</b>
                            @foreach ($movie->tags as $tag)
                                <span class="badge badge-info">{{ $tag->name }}</span>
                            @endforeach</li>
                        <li>
                            <b>Genre:</b>
                            @foreach ($movie->genres as $genre)
                                <span class="badge badge-info">{{ $genre->name }}</span>
                            @endforeach
                        </li>


                    </ul>
                </div>
            </div>
            {{--Movie Details--}}
            <div class="col-lg-9 pt-4 pl-3">
                <div class="movie-story">
                    <h2 class="mb-0 d-flex ">
                        <i class="icon-book-open text-primary mr-3"></i> {{$movie->movie_name}}
                    </h2>
                    <p class="mt-3">{!! $movie->movie_details !!}</p>

                </div>
                <h2>Releated Movies</h2>
                <div class="row">
                    @forelse ($movie->relatedPostsByTag()->take(4) as $m)
                        <div class="col-md-3 grid-item">
                            <a href="{{route('pages.movie', $m->slug)}}">
                                <figure class="releated-movie_container effect-honey">
                                    @if($image = $m->image()->where('meta','Poster_Image')->first())
                                        <img src="{{asset($image->url) }}" class="img-fluid featured-movie_image"
                                             alt="">
                                    @endif<br>
                                    <img src="images/featured-1.jpg" class="img-fluid featured-movie_image" alt="">
                                    <figcaption class="featured-movie_details_container">
                                        <div class="featured-movie_details">
                                            <div class="ratings">
                                                <i class="fas fa-star mr-2"></i>
                                                @if($m->ratings()->avg('rating'))
                                                    {{number_format($m->ratings()->avg('rating'),1)}}/5
                                                @endif
                                            </div>
                                            <div class="description">
                                                <h2 class="mb-0 ">{{$m->movie_name}}</h2>
                                                <p class="mb-0">Genre</p>
                                            </div>
                                        </div>
                                    </figcaption>
                                </figure>
                            </a>
                        </div>
                    @empty
                        <div class="col-sm-12">
                            No Related Images
                        </div>
                    @endforelse
                </div>

                <div class="review mt-4">
                    <div class="card">
                        <div class="card-body">

                            <div>
                                <div class="d-flex justify-content-between">
                                    <h2>User Reviews</h2>
                                    @if(auth()->check())
                                        <a type="button" class="btn btn-white  d-flex align-items-center"
                                           data-toggle="modal" data-target="#myModal">
                                            Write Review
                                        </a>
                                    @else
                                        <a href="{{route('login')}}" class="btn btn-dark  d-flex align-items-center ">
                                            Write Review
                                        </a>
                                    @endif
                                </div>

                                <!-- The Modal -->
                                <div class="modal fade" id="myModal">
                                    <div class="modal-dialog">
                                        <div class="modal-content">

                                            <!-- Modal Header -->
                                            <div class="modal-header">
                                                @if(auth()->check())
                                                    <h4 class="modal-title">Reviewd by {{auth()->user()->name}}</h4>
                                                @endif
                                                <button type="button" class="close" data-dismiss="modal">&times;
                                                </button>
                                            </div>

                                            <!-- Modal body -->
                                            <div class="modal-body">

                                                {!! Form::open(['url' => route( 'movie.rating.store',$movie->slug),'method'=>'POST','enctype'=>'multipart/form-data']) !!}
                                                <div class="form-group">
                                                    <label for="comment">Review</label>
                                                    @if(auth()->user())
                                                    <textarea class="form-control" rows="5" name="rating_description"
                                                              id="comment">{{ $movie->hasRating(auth()->user())->rating_description}}</textarea>
                                                    @endif
                                                    <div>
                                                        @if(auth()->check())
                                                            <div class="stars stars-example-css">
                                                                <select class="example-css" name="rating"
                                                                        autocomplete="off">
                                                                    @for ($i = 1; $i <=5; $i++)
                                                                        <option value="{{ $i }}" {{ $movie->hasRating(auth()->user()) && $movie->hasRating(auth()->user())->rating == $i ? 'selected':'' }}>{{ $i }}</option>
                                                                    @endfor
                                                                </select>
                                                            </div>
                                                        @endif
                                                    </div>
                                                </div>
                                                {{ Form::submit('Submit', ['class' => 'btn btn-primary btn-block btn-h1-spacing']) }}

                                                {!! Form::close() !!}
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{--User Review--}}
                            @foreach($movie->ratings as $rating)
                                @if( $rating->rating_description)
                                    <div class="review-container d-flex mt-4">
                                        <div class="user-image_container mr-3" style="height: 48px; width: 48px">

                                            @if($rating->user->images()->first())
                                                <img src="{{asset('storage/'.$rating->user->images()->first()->path)}}"
                                                     class="rounded-circle user-image" alt="user profie picture">
                                            @else
                                                <img src="/storage/user/noImage.png" class="rounded-circle user-image"
                                                     alt="user profie picture">
                                            @endif
                                        </div>
                                        <div class="user-review_container">
                                            <div class="d-flex align-items-top">
                                                <div class="d-block">
                                                    <h4 class="d-block mb-0">{{$rating->user->name}}</h4>
                                                    <small class="d-block text-secondary">{{ date('d-m-Y', strtotime($rating->created_at))}}</small>
                                                </div>
                                                <div class="ml-5">
                                                    @for ($i = 1; $i <= $rating->rating; $i++)
                                                        <span class="fa fa-star checked yellow-text"></span>
                                                    @endfor
                                                    {{ $rating->rating }}/5
                                                </div>
                                            </div>
                                            <p class="mt-3">{{ $rating->rating_description }}</p>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
@push('stylesheets')
    <link href="{{asset('star_rating/themes/css-stars.css')}}" rel="stylesheet"/>
@endpush

@push('scripts')
    <script src="{{ asset('star_rating/jquery-1.11.2.min.js') }}"></script>
    <script src="{{ asset('star_rating/jquery.barrating.js') }}"></script>
    <script src="{{ asset('star_rating/examples.js') }}"></script>
    <script>
        $(document).ready(function () {
            var loggedOn = {{ auth()->check() ? 'true':'false' }};
            $(document).on('change', '.example-css', function () {
                if (!loggedOn)
//
                    window.location = '{{ url('login') }}';

                $.ajax({
                    type: 'POST',
                    data: {rating: $(this).val(), _token: '{{ csrf_token() }}'},
                    url: '{{ route( 'movie.rating.store', $movie->slug) }}',
                    success: function (response) {
//                   alert('submitted');
                        console.log('success', response);
                    },
                    error: function (e) {
                        console.log('error', e)
                    }
                })
            });
        });
    </script>
@endpush

