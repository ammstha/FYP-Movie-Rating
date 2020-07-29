@extends('admin.layout.app')

@section('title', "| Setting")
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1 class="h2">Setting</h1>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="content table-responsive table-full-width">
                    <table class="table table-hover table-striped">
                        <thead>
                        <tr>
                            <th>Title</th>
                            <th>Value</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($settings as $setting)
                            <tr>
                                <td>{{ $setting->title }}</td>
                                <td>{{ $setting->value }}</td>
                                <td>
                                    <button type="button" class="btn btn-sm" data-toggle="modal"
                                            data-target="#updatesetting-{{ $setting->id }}">Edit
                                    </button>
                                </td>
                            </tr>
                            <div class="modal fade" id="updatesetting-{{ $setting->id }}" role="dialog">
                                <div class="modal-dialog modal-sm">
                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Edit Value</h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>
                                        <div class="modal-body">
                                            {{ Form::model($setting, ['route' => ['setting.update', $setting->slug], 'method' => "PUT"]) }}

                                            {{ Form::label('value', "Value:") }}
                                            {{ Form::text('value', null, ['class' => 'form-control']) }}

                                            {{ Form::submit('Save Changes', ['class' => 'btn btn-success', 'style' => 'margin-top:20px;']) }}
                                            {{ Form::close() }}
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>





@endsection
