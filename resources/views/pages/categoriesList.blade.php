@extends('front.layout.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">

        <h1 class="py-5">Categories List</h1>
                <div class="list-group">
        @foreach($categories as $category)

            <a  class="list-group-item" href="{{route('categories.movie',$category->slug)}}">{{$category->name}}</a>

        @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection