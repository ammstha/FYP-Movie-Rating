<!doctype html>
<html lang="en">
@include('front.partial._head')
<body>
@include('front.partial._navigation')
<div>
@yield('content')
</div>

@include('front.partial._footer')
@include('front.partial._script')
</body>

</html>
