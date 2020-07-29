
<nav class="navbar navbar-dark navbar-expand-lg sticky-top bg-dark flex-md-nowrap p-0">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="{{route('dashboard')}}">Movie Rating</a>
    <ul class="navbar-nav px-5 ml-auto">
        <li class="nav-item dropdown ">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            {{ Auth::user()->name }}
        </a>

        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('logout') }}"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
            Logout
            </a>
            <a class="dropdown-item" href="{{route('index')}}">Home Page</a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST"
            style="display: none;">
            {{ csrf_field() }}
            </form>

        </div>
        </li>
    </ul>
</nav>

tyo color k vako

