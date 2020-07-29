<nav class="col-md-2 d-none d-md-block bg-light sidebar">
    <div class="sidebar-sticky">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{Request::is('dashboard') ? "active" : "" }}" href="{{route('dashboard')}}">
                    <span data-feather="home"></span>
                    Dashboard <span class="sr-only"></span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{Request::is('categories') ? "active" : "" }}" href="{{route('categories.index')}}">
                    <span data-feather="grid"></span>
                    Category
                </a>

            </li>
            <li class="nav-item">
                <a class="nav-link {{Request::is('genres') ? "active" : "" }}" href="{{route('genres.index')}}">
                    <span data-feather="book"></span>
                    Genre
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{Request::is('tags') ? "active" : "" }}" href="{{route('tags.index')}}">
                    <span data-feather="tag"></span>
                    Tags
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{Request::is('movie') ? "active" : "" }}" href="{{route('movie.index')}}">
                    <span data-feather="film"></span>
                    Movie
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{Request::is('movie') ? "active" : "" }}" href="{{route('feature.movie')}}">
                    <span data-feather="aperture"></span>
                   Feature Movie
                </a>
            </li>
            @role('super-admin')
            <li class="nav-item">
                <a class="nav-link {{Request::is('users') ? "active" : "" }}" href="{{route('users.index')}}">
                    <span data-feather="users"></span>
                    User
                </a>
            </li>
            @endrole

            <li class="nav-item">
                <a class="nav-link {{Request::is('setting') ? "active" : "" }}" href="{{route('setting.index')}}">
                    <span data-feather="settings"></span>
                    General Setting
                </a>
            </li>


        </ul>
    </div>
</nav>