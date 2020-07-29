@extends('admin.layout.app')
@section('title', "| Dashboard")
@section('content')
    <div class="jumbotron">
        <h1>Welcome to the Dashboard.</h1>
    </div>
    <div class="row">

        <div class="col-lg-3">
            <div class="card">
                <div class="stat-icon text-center bg-warning">
                    <i class="fas fa-film"></i>
                </div>
                <div class="card-body">
                    <a class="dashboard-card" href="{{route('movie.index')}}">
                    <div class="d-flex justify-content-between">
                        <div class="stat-text">Movie</div>
                        <div class="stat-digit">
                            {{ $movieCount}}
                        </div>
                    </div>
                     </a>
                </div>
            </div>
        </div>


        <div class="col-lg-3">
            <div class="card">
                <div class="stat-icon text-center bg-primary">
                    <i class="fas fa-film"></i>
                </div>
                <div class="card-body">
                    <a class="dashboard-card" href="{{route('feature.movie')}}">
                    <div class="d-flex justify-content-between">
                        <div class="stat-text">Feature Movie</div>
                        <div class="stat-digit">
                            {{ $featureMovieCount}}
                        </div>
                    </div>
                    </a>
                </div>
            </div>
        </div>

        <div class="col-lg-3">
            <div class="card">
                <div class="stat-icon text-center bg-secondary">
                    <i class="fa fa-th"></i>
                </div>
                <div class="card-body">
                    <a class="dashboard-card" href="{{route('categories.index')}}">
                    <div class="d-flex justify-content-between">
                        <div class="stat-text">Categories</div>
                        <div class="stat-digit">
                            {{  $categoryCount}}
                        </div>
                    </div>
                    </a>
                </div>
            </div>
        </div>

        <div class="col-lg-3">
            <div class="card">
                <div class="stat-icon text-center bg-dark">
                    <i class="fas fa-book"></i>
                </div>
                <div class="card-body">
                    <a class="dashboard-card" href="{{route('genres.index')}}">
                    <div class="d-flex justify-content-between">
                        <div class="stat-text">Genre</div>
                        <div class="stat-digit">
                            {{ $genreCount}}
                        </div>
                    </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 pt-3">
            <div class="card">
                <div class="stat-icon text-center bg-success">
                    <i class="fa fa-tags"></i>
                </div>
                <div class="card-body">
                    <a class="dashboard-card" href="{{route('tags.index')}}">
                    <div class="d-flex justify-content-between">
                        <div class="stat-text">Tag</div>
                        <div class="stat-digit">
                            {{ $tagCount}}
                        </div>
                    </div>
                    </a>
                </div>
            </div>
        </div>

        <div class="col-lg-3 pt-3">
            <div class="card">
                <div class="stat-icon text-center bg-info">
                    <i class="fas fa-user-secret"></i>
                </div>
                <div class="card-body">
                    <a class="dashboard-card" href="{{route('users.index')}}">
                    <div class="d-flex justify-content-between">
                        <div class="stat-text">Admin</div>
                        <div class="stat-digit">
                            {{ $adminCount}}
                        </div>
                    </div>
                    </a>
                </div>
            </div>
        </div>

        <div class="col-lg-3 pt-3">
            <div class="card">
                <div class="stat-icon text-center bg-danger">
                    <i class="fas fa-users"></i>
                </div>
                <div class="card-body">
                    <a class="dashboard-card" href="{{route('users.index')}}">
                    <div class="d-flex justify-content-between">
                        <div class="stat-text">Customer</div>
                        <div class="stat-digit">
                            {{ $CustomerCount}}
                        </div>
                    </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

@endsection