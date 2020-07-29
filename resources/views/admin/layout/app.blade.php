<!doctype html>
<html lang="en">
@include('admin.partial._head')

<body>
@include('admin.partial._navigation')

<div class="container-fluid">
    <div class="row">
        @include('admin.partial._sidebar')

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
            @include('admin.partial._message')
            @yield('content')

        </main>
    </div>
</div>
@include('admin.partial._script')
</body>
</html>

