
@extends('front.layout.app')
@section('content')
<div class="container">
    <h3 class="py-5">Account Setting</h3>
    <div class="row pb-5">
        <div class="col-md-3">
            <div>
            @if($user->images()->first())
                <div class="user-image_container position-relative">
                    <img src="{{asset('storage/'.$user->images()->first()->path)}}">
                    <div class="user-image_edit position-absolute d-flex align-items-center justify-content-center">
                        <a href="#"  data-toggle="modal" data-target="#edit"><i class="far fa-edit mr-2"></i> edit </a>
                    </div>
                </div>


            @else
                <img src="/storage/user/noImage.png" height="200px" width="auto">
            @endif
            </div>
        </div>

        <div class="col-md-9">
        <table class="table table-hover">
            <tr>
                <td>Change your Name:</td>
                <td>{{$user->name}}</td>
                <td>
                    <button type="button" class="btn btn-sm" data-toggle="modal"
                            data-target="#updateName">Edit
                    </button>
                </td>
            </tr>
            <tr>
                <td>Change your Email:</td>
                <td>{{$user->email}}</td>
                <td>
                    <button type="button" class="btn btn-sm" data-toggle="modal"
                            data-target="#updateEmail">Edit
                    </button>
                </td>
            </tr>
            <tr>
                <td>Change your Password:</td>
                <td>**********</td>
                <td>
                    <button type="button" class="btn btn-sm" data-toggle="modal"
                            data-target="#updatePassword">Edit
                    </button>
                </td>
            </tr>
        </table>

        {{--Update Name--}}
        <div class="modal fade" id="updateName" role="dialog">
            <div class="modal-dialog modal-sm">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Edit Name</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        {{ Form::model($user, ['route' => ['update.setting.name', $user->slug], 'method' => "PUT"]) }}

                        {{ Form::label('name', "Name:") }}
                        {{ Form::text('name', null, ['class' => 'form-control']) }}

                        {{ Form::submit('Save Changes', ['class' => 'btn btn-success', 'style' => 'margin-top:20px;']) }}
                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>


        {{--Update Email--}}
        <div class="modal fade" id="updateEmail" role="dialog">
            <div class="modal-dialog modal-sm">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Edit Email</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        {{ Form::model($user, ['route' => ['update.setting.email', $user->slug], 'method' => "PUT"]) }}

                        {{ Form::label('email', "Email:") }}
                        {{ Form::text('email', null, ['class' => 'form-control']) }}

                        {{ Form::submit('Save Changes', ['class' => 'btn btn-success', 'style' => 'margin-top:20px;']) }}
                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>

        {{--Update Password--}}
        <div class="modal fade" id="updatePassword" role="dialog">
            <div class="modal-dialog modal-sm">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Edit Password</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        {{ Form::model($user, ['route' => ['update.setting.password', $user->slug], 'method' => "PUT"]) }}

                        <label for="current_password" class="">Current Password</label>
                        <input id="current_password" type="password" class="form-control" name="current_password" required>

                        <label for="newPassword" class="">New Password</label>
                        <input id="newPassword" type="password" class="form-control" name="password" required>

                        <label for="newPassword" class="">Confirm Password</label>
                        <input id="confirmPassword" type="password" class="form-control" name="confirmPassword" required>

                        {{ Form::submit('Save Changes', ['class' => 'btn btn-success', 'style' => 'margin-top:20px;']) }}
                        {{ Form::close() }}

                    </div>
                    {{--<div class="modal-footer">--}}
                        {{--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>--}}
                    {{--</div>--}}
                </div>
            </div>
        </div>
    </div>
    </div>
</div>

<!-- user edit modal -->
<div class="modal fade" id="edit" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Image</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                {!! Form::open(['url' => route( 'user.Image',auth()->user()->slug),'method'=>'POST','enctype'=>'multipart/form-data']) !!}
                {{ method_field('PUT') }}
                <div class="form-group">
                    {{Form::file('image')}}
                </div>

                {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
                {!! Form::close() !!}
            </div>
            {{--<div class="modal-footer">--}}
                {{--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>--}}
            {{--</div>--}}
        </div>
    </div>
</div>

@endsection

