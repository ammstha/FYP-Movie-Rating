@extends('admin.layout.app')

@section('title', "| Feature Movie")
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1 class="h2">Feature Movies</h1>

    </div>

{{--{{dd($featureMovies)}}--}}
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="content table-responsive table-full-width">
                    <table class="table table-hover table-striped">
                        <thead>
                        <tr>
                            <th>Movie Name</th>
                            <th>Action</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($featureMovies as $featureMovie)
                            <tr>
                                <td> {{ $featureMovie->movie_name}}</td>
                                <td><a href="{{route('update.feature.movie',$featureMovie->slug)}}" type="button" class="btn btn-danger btn-sm">Remove</a></td>

                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

