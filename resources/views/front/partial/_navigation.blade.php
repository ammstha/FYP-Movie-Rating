<nav class="navbar navbar-expand-lg navbar-light bg-white">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="{{route('index')}}">
            {{--<img src="storage/images/logo.png" alt="" class="logo img-fluid">--}}
            <img src="{{ asset('storage/images/logo.png') }}" alt="" class="logo img-fluid">

            <div class="d-inline-block ml-4">
                <h2 class="mb-0">
                    <b>Movie</b>
                </h2>
                <p class="mb-0">Rating</p>
            </div>
        </a>
        <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            {{--//Search Movie--}}
            <form action="{{route('searchGo')}}" method="get" class="form-inline ml-5">
                <input class="form-control mr-sm-2 search_input" type="text" id="searchMovie" placeholder="Movies Search" name="q" aria-label="Search">
                <button class="btn btn-dark search_button ml-2" type="submit">Go</button>
            </form>

            <ul class="navbar-nav ml-auto navigation">


                <li class="nav-item {{Request::is('/') ? "active" : "" }} ">
                    <a class="nav-link p-0 d-flex align-items-center" href="{{route('index')}}">Home</a>
                </li>
                <li class="nav-item {{Request::is('about') ? "active" : "" }}">
                    <a class="nav-link p-0 d-flex align-items-center" href="{{route('pages.about')}}">About Us</a>
                </li>


                <li class="nav-item position-relative">
                    <a class="nav-link dropdown-toggle p-0" href="#" id="navbarDropdown" role="button"
                       data-toggle="dropdown">
                        Categories
                    </a>
                    <div class="dropdown-menu">
                        @if($categories->count() < 5 )
                            @foreach($categories as $category)
                                <a class="dropdown-item" href="{{route('categories.movie',$category->slug)}}">{{$category->name}}</a>
                            @endforeach
                        @else
                            @foreach($categories as $category)
                                <a class="dropdown-item" href="{{route('categories.movie',$category->slug)}}">{{$category->name}}</a>
                            @endforeach
                            <a class="dropdown-item" href="{{route('categories.list')}}">Show all</a>
                        @endif
                    </div>
                </li>
                <li class="nav-item position-relative">
                    <a class="nav-link dropdown-toggle p-0" href="#" id="navbarDropdown" role="button"
                       data-toggle="dropdown">
                        Genres
                    </a>
                    <div class="dropdown-menu">
                @if($genres->count() < 5 )
                    @foreach($genres as $genre)
                        <a class="dropdown-item" href="{{route('genres.movie',$genre->slug)}}">{{$genre->name}}</a>
                    @endforeach
                @else
                    @foreach($genres as $genre)
                        <a class="dropdown-item" href="{{route('genres.movie',$genre->slug)}}">{{$genre->name}}</a>
                    @endforeach
                    <a class="dropdown-item" href="{{route('genres.list')}}">Show all</a>
            @endif
                    </div>
                </li>
                <li class="nav-item {{Request::is('contact') ? "active" : "" }}">
                    <a class="nav-link p-0" href="{{route('contact.show')}}">Contact Us</a>
                </li>
                @guest

                    <ul class="navbar-nav ml-4 navigation">
                        <li class="nav-item">
                            <a class="nav-link text-dark py-0" href="{{ route('login') }}">
                                <i class="icon-user mr-2"></i>Login</a>
                        </li>
                    </ul>

                    @else
                        <li class="nav-item position-relative">
                                <a class="nav-link dropdown-toggle p-0" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{ Auth::user()->name }}
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{route('accountSetting',auth()->user()->slug)}}">Account Setting</a>
                                    <a class="dropdown-item" href="{{route('yourActivity',auth()->user()->slug)}}">Your Activity</a>
                                    @role('super-admin','admin')
                                    <a class="dropdown-item" href="{{route('dashboard',auth()->user()->slug)}}">Dashboard</a>
                                    @endrole
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                   document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                          style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </div>
                            </li>
                        {{--</ul>--}}
                        @endguest
            </ul>
        </div>
    </div>
</nav>

@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

    <script type='text/javascript'>
        $('#searchMovie').autocomplete({
            minLength : 1,
            autoFocus : true,
            source : '{!!URL::route('search.Movie') !!}',

            select:function(e,ui){
                window.location = ui.item.url;
            }
        });
    </script>
@endpush