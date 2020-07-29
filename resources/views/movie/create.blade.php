@extends('admin.layout.app')

    @section('title', "| Movie Create")

@push('stylesheet')
    <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
    <script>
        tinymce.init({
            selector: 'textarea',
            plugins: "link code",
            menubar:false
//            menu:{
//                view:{title:'Edit',items:'cut,copy,paste'}
//            }
        });
    </script>
@endpush
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1 class="h2">Add Movies</h1>

    </div>

    {!! Form::open(['url' => route( 'movie.store'),'method'=>'POST','enctype'=>'multipart/form-data']) !!}

    <div class="col-sm-12">
        <label for="movie_name">Movie Name</label>
        <input type="text" class="form-control" name="movie_name">
    </div>
    <div class="col-sm-12">
        <label for="feature_movie">Feature this Movie</label>
        <input type="checkbox" name="feature_movie" value="1"><br>
    </div>
    <div class="col-sm-12">
        <label for="category_id">Movie Category</label>
        <select class="form-control" name="category_id">
            @foreach($categories as $category)
                <option value='{{ $category->id }}'>{{ $category->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="col-sm-12">
        <label for="genres">Movie Genre</label>
        <select class="form-control select2-multi" name="genres[]" multiple="multiple">
            @foreach($genres as $genre)
                <option value='{{ $genre->id }}'>{{ $genre->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="col-sm-12">
        <label for="tags[]">Tag</label>
        <select class="form-control select2-multi" name="tags[]" multiple="multiple">
            @foreach($tags as $tag)
                <option value='{{ $tag->id }}'>{{ $tag->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="col-sm-12">
        <label for="movie_details">Movie Details</label>
        <textarea class="form-control" name="movie_details"></textarea>
    </div>

    <div class="col-sm-12">
        <label for="running_time">Running Rime</label>
        <input type="text" class="form-control" name="running_time">
    </div>

    <div class="col-sm-12">
        <label for="release_date">Release Date</label>
        <input type="date" class="form-control" name="release_date">
    </div>

    <div class="col-sm-12">
        <label for="poster_image">Poster Image</label>
        <input type="file" class="form-control" name="poster_image">
    </div>

    <div class="col-sm-12">
        <label for="cover_image">Cover Image</label>
        <input type="file" class="form-control" name="cover_image">
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
