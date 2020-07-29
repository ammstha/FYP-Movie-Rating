{{--@extends('layouts.app')--}}

{{--@section('content')--}}
{{--<div class="container">--}}
    {{--<div class="row">--}}
        {{--<div class="col-md-8 col-md-offset-2">--}}
            {{--<div class="panel panel-default">--}}
                {{--<div class="panel-heading">Reset Password</div>--}}

                {{--<div class="panel-body">--}}
                    {{--<form class="form-horizontal" method="POST" action="{{ route('password.request') }}">--}}
                        {{--{{ csrf_field() }}--}}

                        {{--<input type="hidden" name="token" value="{{ $token }}">--}}

                        {{--<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">--}}
                            {{--<label for="email" class="col-md-4 control-label">E-Mail Address</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="email" type="email" class="form-control" name="email" value="{{ $email or old('email') }}" required autofocus>--}}

                                {{--@if ($errors->has('email'))--}}
                                    {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('email') }}</strong>--}}
                                    {{--</span>--}}
                                {{--@endif--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">--}}
                            {{--<label for="password" class="col-md-4 control-label">Password</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="password" type="password" class="form-control" name="password" required>--}}

                                {{--@if ($errors->has('password'))--}}
                                    {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('password') }}</strong>--}}
                                    {{--</span>--}}
                                {{--@endif--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">--}}
                            {{--<label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>--}}
                            {{--<div class="col-md-6">--}}
                                {{--<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>--}}

                                {{--@if ($errors->has('password_confirmation'))--}}
                                    {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('password_confirmation') }}</strong>--}}
                                    {{--</span>--}}
                                {{--@endif--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group">--}}
                            {{--<div class="col-md-6 col-md-offset-4">--}}
                                {{--<button type="submit" class="btn btn-primary">--}}
                                    {{--Reset Password--}}
                                {{--</button>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</form>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
{{--@endsection--}}

        <!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('simple-line-icons/css/simple-line-icons.css')}}../">
    <link rel="stylesheet" href="{{asset('css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap-social.css')}}">

    <link rel="stylesheet" href="{{asset('css/login.css')}}">

    <title>Register</title>
</head>

<body>
<div class="login-wrapper d-flex flex-column align-items-center justify-content-center position-absolute">
    <div class="login-form p-5">
        <h2 class="form-title">Reset Password</h2>
        <form class="form-horizontal" method="POST" action="{{ route('password.request') }}">
            {{ csrf_field() }}
            <input type="hidden" name="token" value="{{ $token }}">




            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <input id="email" type="email" class="form-control custom-form_input" name="email" placeholder="Email" value="{{ $email or old('email') }}" required autofocus>

                    @if ($errors->has('email'))
                        <span class="help-block text-danger">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                    @endif
            </div>

            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <input id="password" type="password"class="form-control custom-form_input" placeholder="Password" name="password" required>

                    @if ($errors->has('password'))
                    <span class="help-block text-danger">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                    @endif
            </div>

            <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                    <input id="password-confirm" type="password" class="form-control custom-form_input" placeholder="Confirm Password" name="password_confirmation" required>
                    @if ($errors->has('password_confirmation'))
                        <span class="help-block text-danger">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                    @endif
            </div>

            <button type="submit"class="btn btn-block custom-form_button mt-4">
                Reset Password
            </button>
        </form>
    </div>
    <footer class="login-footer d-flex align-items-center">
        <div class="container">
            <ul class="list-inline mb-0">
                <li class="list-inline-item"><a href="{{route('index')}}">Home</a></li>
                <li class="list-inline-item"><a href="{{route('login')}}">Login</a></li>
                <li class="list-inline-item"><a href="{{route('register')}}">Register</a></li>
                <li class="list-inline-item"><a href="{{route('contact.show')}}">Contact</a></li>
            </ul>
        </div>
    </footer>
</div>

<script src="../js/jquery.slim.min.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
</body>


