@extends('front.layout.app')
@section('content')

<div class="container">
    <h3 class="mt-5">Your Rated movie</h3>

    <div class="row mt-3">
        @foreach($userRatings as $userRating)
            <div class="col-lg-3 col-md-6 mb-4">
                <a href="{{route('pages.movie', $userRating->movie->slug)}}">
                    <figure class="featured-movie_container effect-honey">
                        @if($image = $userRating->movie->image()->where('meta','Poster_Image')->first())
                            <img src="{{asset($image->url) }}" class="img-fluid featured-movie_image" alt="">
                        @endif<br>
                        {{--<img src="images/featured-1.jpg" class="img-fluid featured-movie_image" alt="">--}}
                        <figcaption class="featured-movie_details_container">
                            <div class="featured-movie_details">
                                <div class="ratings">
                                    <i class="fas fa-star mr-2"></i>
                                    @if($userRating->movie->ratings()->avg('rating'))
                                        {{number_format($userRating->movie->ratings()->avg('rating'),1)}}/5
                                    @endif
                                </div>
                                <div class="description">
                                    <h2 class="mb-0 ">{{$userRating->movie->movie_name}}</h2>
                                    {{--<p class="mb-0">Genre</p>--}}
                                </div>
                            </div>
                        </figcaption>
                    </figure>
                </a>
            </div>
        @endforeach
    </div>
    <h3 class="mt-5">Recently searched movies</h3>
    <div class="row mt-3">
        @foreach( $recentlySearched as $movie)
            <div class="col-lg-3 col-md-6 mb-4">
                <a href="{{route('pages.movie',$movie->movie->slug)}}">
                    <figure class="featured-movie_container effect-honey">
                        @if($image = $movie->movie->image()->where('meta','Poster_Image')->first())
                            <img src="{{asset($image->url) }}" class="img-fluid featured-movie_image" alt="">
                        @endif<br>
                        {{--<img src="images/featured-1.jpg" class="img-fluid featured-movie_image" alt="">--}}
                        <figcaption class="featured-movie_details_container">
                            <div class="featured-movie_details">
                                <div class="ratings">
                                    <i class="fas fa-star mr-2"></i>
                                    @if($movie->movie->ratings()->avg('rating'))
                                        {{number_format($movie->movie->ratings()->avg('rating'),1)}}/5
                                    @endif
                                </div>
                                <div class="description">
                                    <h2 class="mb-0 ">{{$movie->movie->movie_name}}</h2>
                                    {{--<p class="mb-0">Genre</p>--}}
                                </div>
                            </div>
                        </figcaption>
                    </figure>
                </a>
            </div>
        @endforeach
    </div>
</div>
    @endsection


