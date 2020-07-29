@extends('admin.layout.app')
@section('title', "| Tags")
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1 class="h2">Tags</h1>
        <button type="button" class="btn btn-primary pull-right" data-toggle="modal"
                data-target="#addtag">Add New Tags
        </button>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">

                    <div class="content table-responsive table-full-width">
                        <table class="table table-hover table-striped">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($tags as $tag)
                                <tr>
                                    <th>{{ $tag->id }}</th>
                                    <td><a href="{{ route('tags.show', $tag->id) }}">{{ $tag->name }}</a></td>
                                    <td>
                                        <button type="button" class="btn btn-sm" data-toggle="modal"
                                                data-target="#updatetag-{{ $tag->id }}">Edit
                                        </button>
                                        <div class="d-inline-block">
                                        {{ Form::open(['route' => ['tags.destroy', $tag->id], 'method' => 'DELETE']) }}
                                        {{ Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) }}
                                        {{ Form::close() }}
                                        </div>
                                    </td>
                                </tr>
                                <div class="modal fade" id="updatetag-{{ $tag->id }}" role="dialog">
                                    <div class="modal-dialog modal-sm">
                                        <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Edit Tag</h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <div class="modal-body">
                                                {{ Form::model($tag, ['route' => ['tags.update', $tag->slug], 'method' => "PUT"]) }}

                                                {{ Form::label('name', "Title:") }}
                                                {{ Form::text('name', null, ['class' => 'form-control']) }}

                                                {{ Form::submit('Save Changes', ['class' => 'btn btn-primary btn-block btn-h1-spacing mt-3']) }}
                                                {{ Form::close() }}
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            </tbody>
                        </table>
                        <div class="text-center">
                            {!! $tags->links(); !!}
                        </div>
                    </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="addtag" role="dialog">
        <div class="modal-dialog modal-sm">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add Tag</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    {!! Form::open(['route' => 'tags.store', 'method' => 'POST']) !!}
                    {{ Form::label('name', 'Name:') }}
                    {{ Form::text('name', null, ['class' => 'form-control']) }}

                    {{ Form::submit('Create New Tag', ['class' => 'btn btn-primary btn-block btn-h1-spacing mt-3']) }}

                    {!! Form::close() !!}
                </div>

            </div>
        </div>
    </div>

@endsection
