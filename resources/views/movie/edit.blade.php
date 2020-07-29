@extends('admin.layout.app')

@section('title', "| Movie Create")

@push('stylesheet')
    <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
    <script>
        tinymce.init({
            selector: 'textarea',
            plugins: "link code",
            menubar: false
//            menu:{
//                view:{title:'Edit',items:'cut,copy,paste'}
//            }
        });
    </script>
@endpush
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Movies</h1>
    </div>
    {{ Form::model($movie,['url' => route( 'movie.update',$movie->slug),'method'=>'PUT','enctype'=>'multipart/form-data']) }}


<div class="col-sm-12">
        {{ Form::label('movie_name', 'Movie Name:') }}
        {{ Form::text('movie_name', null, ["class" => 'form-control']) }}
    </div>
    <div class="col-sm-12">
        {{ Form::label('feature_movie', 'Feature this movie:') }}
        {{ Form::checkbox('feature_movie','1',null, ["class" => 'form-control']) }}
    </div>
    <div class="col-sm-12">
        {{ Form::label('category_id', "Category:", ['class' => 'form-spacing-top']) }}
        {{ Form::select('category_id', $cats, null, ['class' => 'form-control']) }}
    </div>
    <div class="col-sm-12">
        {{ Form::label('Genres', 'Genres:', ['class' => 'form-spacing-top']) }}
        {{ Form::select('genres[]', $genres2, null, ['class' => 'form-control select2-multi', 'multiple' => 'multiple']) }}
    </div>
    <div class="col-sm-12">
        {{ Form::label('tags', 'Tags:', ['class' => 'form-spacing-top']) }}
        {{ Form::select('tags[]', $tags2, null, ['class' => 'form-control select2-multi', 'multiple' => 'multiple']) }}
    </div>

    <div class="col-sm-12">
        {{ Form::label('movie_details', 'Movie Details:') }}
        {{ Form::textarea('movie_details', null, ["class" => 'form-control']) }}
    </div>

    <div class="col-sm-12">
        {{ Form::label('running_time', 'Running Time:') }}
        {{ Form::text('running_time', null, ["class" => 'form-control']) }}
    </div>

    <div class="col-sm-12">
        {{ Form::label('release_date', 'Release Date:') }}
        {{ Form::date('release_date', null, ["class" => 'form-control']) }}

    </div>

    <div class="col-sm-12">
        {{ Form::label('poster_image', 'Poster Image:') }}
        {{ Form::file('poster_image', null, ["class" => 'form-control']) }}
    </div>

    <div class="col-sm-12">
        {{ Form::label('cover_image', 'Cover Image:') }}
        {{ Form::file('cover_image', null, ["class" => 'form-control']) }}
    </div>
    {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}


@endsection
@push('scripts')
    {!! Html::script('js/parsley.min.js')!!}
    {!! Html::script('js/select2.min.js')!!}

    <script type="text/javascript">
        $(document).ready(function () {
            $('.select2-multi').select2();
        });
    </script>
@endpush

@push('stylesheet')
    {!! Html::style('css/select2.min.css')!!}
@endpush
