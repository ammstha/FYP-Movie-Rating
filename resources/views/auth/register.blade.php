<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-social.css">

    <link rel="stylesheet" href="css/login.css">

    <title>Register</title>
</head>

<body>
<div class="login-wrapper d-flex flex-column align-items-center justify-content-center position-absolute">
    <div class="login-form p-5">
        <h2 class="form-title">Register</h2>
        <form class="form-horizontal" method="POST" action="{{ route('register') }}">
            {{ csrf_field() }}

            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <input id="name" type="text" class="form-control custom-form_input" name="name"  placeholder="Name" value="{{ old('name') }}" required>
                    @if ($errors->has('name'))
                        <span class="help-block text-danger">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                    @endif
            </div>

            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <input id="email" type="email" class="form-control custom-form_input" name="email"  placeholder="Email" value="{{ old('email') }}" required>

                    @if ($errors->has('email'))
                        <span class="help-block text-danger">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                    @endif
            </div>


            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <input id="password" type="password" class="form-control custom-form_input" placeholder="Password" name="password" required>

                    @if ($errors->has('password'))
                        <span class="help-block text-danger">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                    @endif
            </div>

            <div class="form-group">
                    <input id="password-confirm" type="password" class="form-control custom-form_input" placeholder="Confirm Password" name="password_confirmation" required>
            </div>



            <button class="btn btn-block custom-form_button mt-4" type="submit">Register</button>

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

<script src="js/jquery.slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>


