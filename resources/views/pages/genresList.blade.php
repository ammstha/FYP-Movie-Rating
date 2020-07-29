@extends('front.layout.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">

                <h1 class="py-5">Genre List</h1>
                <div class="list-group">
                @foreach($genres as $genre)
                      <a class="list-group-item" href="{{route('genres.movie',$genre->slug)}}">{{$genre->name}}</a>
                @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection