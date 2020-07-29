@extends('admin.layout.app')
@section('title', "| Movie Index")
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1 class="h2">Movies</h1>
        <a href="{{route('movie.create')}}">
            <button type="button" class="btn btn-primary pull-right">Add Movies</button>
        </a>
    </div>


    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="content table-responsive table-full-width">
                    <table class="table table-hover table-striped">
                        <thead>
                        <tr>
                            <th>Movie Name</th>
                            <th>Category</th>
                            <th>Poster Image</th>
                            <th>Cover Image</th>
                            <th>Status</th>
                            <th>Release Date</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($movies as $movie)
                            <tr>
                                <td>{{ $movie->movie_name }}</td>
                                <td>{{$movie->category->name}}</td>

                                <td>
                                    @if($image = $movie->image()->where('meta','Poster_Image')->first())
                                        <img src="{{asset($image->url) }}" class="" height="auto" width="50px">
                                    @endif
                                </td>
                                <td>
                                    @if($image = $movie->image()->where('meta','Cover_Image')->first())
                                        <img src="{{asset($image->url) }}" class="" height="auto" width="50px">
                                    @endif
                                </td>
                                <td>
                                    @if($movie->feature_movie)
                                        <p>Featured</p>
                                    @else
                                        <p>Not Featured</p>
                                    @endif

                                </td>
                                <td>{{$movie->release_date}}</td>

                                <td>
                                    <a href="{{route('movie.edit',$movie->slug)}}" type="button" class="btn btn-sm">Edit</a>
                                    <div class="d-inline-block">
                                    {{ Form::open(['route' => ['movie.destroy', $movie->id], 'method' => 'DELETE']) }}
                                    {{ Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) }}
                                    {{ Form::close() }}
                                    </div>
                                </td>
                            </tr>

                        @endforeach
                        </tbody>
                    </table>
                    {!! $movies->links() !!}
                </div>
            </div>
        </div>
    </div>
@endsection

