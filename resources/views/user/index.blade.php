@extends('admin.layout.app')
@section('title', "| User Index")
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1 class="h2">User</h1>
        <a href="{{route('users.create')}}" >  <button type="button" class="btn btn-primary pull-right" >Add Admin</button></a>
    </div>

    {{--<div class="container-fluid">--}}
        {{--<div class="row">--}}
            <div class="col-md-12">

                <div class="content table-responsive table-full-width">
                    <table class="table table-hover table-striped">
                        <thead>
                        <tr>
                            <th>User Name</th>
                            <th>User Email</th>
                            <th>Role</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->name }}</td>
                                <td>{{$user->email}}</td>
                                <td> @foreach($user->roles as $role)
                                        {{$role->name}}
                                    @endforeach
                                </td>
                            </tr>

                        @endforeach
                        </tbody>
                    </table>


                            <div class="text-center">
                                {!! $users->links() !!}
                            </div>

                </div>
            </div>
        {{--</div>--}}
    {{--</div>--}}

@endsection
