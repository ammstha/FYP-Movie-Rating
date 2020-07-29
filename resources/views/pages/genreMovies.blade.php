@extends('front.layout.app')
@section('content')
<div class="container">

    {{--<h3>{{$genre->name}}</h3>--}}
    {{--<div class="row">--}}
        {{--@if($genre->movies->count() >= 1 )--}}
        {{--@foreach($genre->movies as $movie)--}}
            {{--<div class="col-md-3">--}}
                {{--<a href="{{route('pages.movie', $movie->slug)}}">--}}
                    {{--<h2> {{$movie->movie_name}}</h2>--}}
                {{--</a>--}}
                {{--<p> {{$movie->release_date}}<p>--}}

            {{--</div>--}}
        {{--@endforeach--}}
        {{--@else--}}
            {{--<p>No {{$genre->name}} categories Movies</p>--}}
        {{--@endif--}}
    {{--</div>--}}
    <h3 class="py-5">Genre/{{$genre->name}}</h3>

    <div class="row mt-3">
        @if($genre->movies->count() >= 1 )
            @foreach($genre->movies as $movie)
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

        @else
            <p>No {{$genre->name}} Genre Movies</p>
        @endif
    </div>


</div>
@endsection


