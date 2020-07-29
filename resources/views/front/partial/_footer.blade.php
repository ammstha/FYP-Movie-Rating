{{--{{dd($facebook)}}--}}
<footer class="dark-background">
    <div class="container mt-4 py-5">
        <div class="row">
            <!-- logo -->

            <div class="col-md-3">
                <a href="{{route('index')}}" class="footer-logo">
                <div class="d-flex align-items-center">
                    <img src="{{ asset('storage/images/logo.png') }}" alt="" class="img-fluid logo">
                    <div class="d-inline-block ml-3 text-white">
                        <h2 class="mb-0">
                            <b>Movie</b>
                        </h2>
                        <p class="mb-0">Rating</p>
                    </div>
                </div>
                </a>
            </div>


            <!-- location -->
            <div class="col-md-3">
                <h4 class="footer-heading text-white">CONTACT US</h4>
                <ul class="footer-info mt-2 list-unstyled">
                    <li>
                        <i class="icon-phone mr-2"></i>
                        977+ 9843183059
                    </li>
                    <li>
                        <i class="icon-envelope-open mr-2"></i>
                        amm.reet.stha1@gmail.com
                    </li>
                </ul>
            </div>

            <!-- useful links -->
            <div class="col-md-3">
                <h4 class="footer-heading text-white">USEFUL LINKS</h4>
                <ul class="footer-links mt-2 list-unstyled">
                    <li>
                        <a href="{{ route('login') }}">Login</a>
                    </li>
                    <li>
                        <a href="{{ route('register') }}">Register</a>
                    </li>
                    <li>
                        <a href="{{ route('categories.list') }}">Categories</a>
                    </li>
                    <li>
                        <a href="{{ route('genres.list') }}">Genre</a>
                    </li>
                </ul>
            </div>

            <!-- follow -->
            <div class="col-md-3">
                <h4 class="footer-heading text-white">FOLLOW US ON</h4>
                <ul class="footer-social list-inline mt-2">
                    <li class="list-inline-item social-icon social-icon_facebook align-items-center justify-content-center d-flex">
                        <a href="{{$facebook->value}}" class="footer-facebook">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </li>
                    <li class="list-inline-item social-icon social-icon_twitter align-items-center justify-content-center d-flex">
                        <a href="{{$twitter->value}}">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </li>
                    <li class="list-inline-item social-icon social-icon_instagram align-items-center justify-content-center d-flex">
                        <a href="{{$instagram->value}}">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="footer-copyright text-secondary">
                    &copy; 2018 Amrit Shrestha. All rights reserved. <a href="#">Terms of Service</a>
                </div>
            </div>
        </div>
    </div>
</footer>