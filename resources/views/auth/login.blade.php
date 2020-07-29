


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

    <title>Login</title>
</head>

<body>
<div class="login-wrapper d-flex flex-column align-items-center justify-content-center position-absolute">
    <div class="login-form p-5">
        <h2 class="form-title">Login</h2>
        <form class="form-horizontal" method="POST" action="{{ route('login') }}">
            {{ csrf_field() }}


            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                <input id="email" type="email" class="form-control custom-form_input" placeholder="Email" name="email"
                       value="{{ old('email') }}" required autofocus>
                @if ($errors->has('email'))
                    <span class="help-block text-danger">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                @endif
            </div>

            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <input type="password" id="password" class="form-control custom-form_input mt-4" placeholder="Password" name="password"
                       required>
                @if ($errors->has('password'))
                    <span class="help-block text-danger">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                @endif

            </div>

            <button class="btn btn-block custom-form_button mt-4" type="submit">LOGIN</button>
            <div class="d-flex justify-content-between my-2 align-items-center">
                {{--<label class="mb-0">--}}
                    {{--<input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>--}}
                    {{--<span class="custom-form_forgot">Remember Me</span>--}}
                {{--</label>--}}
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="remember">
                    <label class="form-check-label custom-form_forgot" for="remember">
                        Remember Me
                    </label>
                </div>
                <a class="custom-form_forgot d-block text-info" href="{{ route('password.request') }}">
                    Forgot Your Password?
                </a>
            </div>



            <a href="{{ url('auth/google') }}" class="btn btn-block btn-social btn-google">
                <span class="fab fa-google"></span> Sign in with Google
            </a>

            <div class="w-100 text-center mt-4">
                Dont have an account?
                <a href="{{route('register')}}">Register</a>
            </div>
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

</html>