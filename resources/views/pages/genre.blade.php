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