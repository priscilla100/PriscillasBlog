{{--<!DOCTYPE html>--}}
{{--<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">--}}
    {{--<head>--}}
        {{--<meta charset="utf-8">--}}
        {{--<meta name="viewport" content="width=device-width, initial-scale=1">--}}

        {{--<title>Laravel</title>--}}

        {{--<!-- Fonts -->--}}
        {{--<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">--}}

        {{--<!-- Styles -->--}}
        {{--<style>--}}
            {{--html, body {--}}
                {{--background-color: #fff;--}}
                {{--color: #636b6f;--}}
                {{--font-family: 'Nunito', sans-serif;--}}
                {{--font-weight: 200;--}}
                {{--height: 100vh;--}}
                {{--margin: 0;--}}
            {{--}--}}

            {{--.full-height {--}}
                {{--height: 100vh;--}}
            {{--}--}}

            {{--.flex-center {--}}
                {{--align-items: center;--}}
                {{--display: flex;--}}
                {{--justify-content: center;--}}
            {{--}--}}

            {{--.position-ref {--}}
                {{--position: relative;--}}
            {{--}--}}

            {{--.top-right {--}}
                {{--position: absolute;--}}
                {{--right: 10px;--}}
                {{--top: 18px;--}}
            {{--}--}}

            {{--.content {--}}
                {{--text-align: center;--}}
            {{--}--}}

            {{--.title {--}}
                {{--font-size: 84px;--}}
            {{--}--}}

            {{--.links > a {--}}
                {{--color: #636b6f;--}}
                {{--padding: 0 25px;--}}
                {{--font-size: 13px;--}}
                {{--font-weight: 600;--}}
                {{--letter-spacing: .1rem;--}}
                {{--text-decoration: none;--}}
                {{--text-transform: uppercase;--}}
            {{--}--}}

            {{--.m-b-md {--}}
                {{--margin-bottom: 30px;--}}
            {{--}--}}
        {{--</style>--}}
    {{--</head>--}}
    {{--<body>--}}
        {{--<div class="flex-center position-ref full-height">--}}
            {{--@if (Route::has('login'))--}}
                {{--<div class="top-right links">--}}
                    {{--@auth--}}
                        {{--<a href="{{ url('/home') }}">Home</a>--}}
                    {{--@else--}}
                        {{--<a href="{{ route('login') }}">Login</a>--}}

                        {{--@if (Route::has('register'))--}}
                            {{--<a href="{{ route('register') }}">Register</a>--}}
                        {{--@endif--}}
                    {{--@endauth--}}
                {{--</div>--}}
            {{--@endif--}}

            {{--<div class="content">--}}
                {{--<div class="title m-b-md">--}}
                    {{--Laravel--}}
                {{--</div>--}}

                {{--<div class="links">--}}
                    {{--<a href="https://laravel.com/docs">Docs</a>--}}
                    {{--<a href="https://laracasts.com">Laracasts</a>--}}
                    {{--<a href="https://laravel-news.com">News</a>--}}
                    {{--<a href="https://blog.laravel.com">Blog</a>--}}
                    {{--<a href="https://nova.laravel.com">Nova</a>--}}
                    {{--<a href="https://forge.laravel.com">Forge</a>--}}
                    {{--<a href="https://github.com/laravel/laravel">GitHub</a>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</body>--}}
{{--</html>--}}
<!DOCTYPE HTML>
<html>
<head>
    @include('sections.head')
</head>
<body>

<nav id="colorlib-main-nav" role="navigation">
    @include('sections.navbar')
</nav>

<div id="colorlib-page">
    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="colorlib-navbar-brand">
                        <a class="colorlib-logo" href="index.html"><span>P</span><span>K</span><span>D</span></a>
                    </div>
                    <a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
                </div>
            </div>
        </div>
    </header>
    <div id="colorlib-about">
        <div class="container">
            <div class="row text-center">
                <h2 class="bold">About</h2>
            </div>
            <div class="row">
                @include('sections.about')
            </div>
        </div>
    </div>
    <div id="colorlib-services">
        <div class="container">
            <div class="row text-center">
                <h2 class="bold">Services</h2>
            </div>
            <div class="row">
                @include('sections.services')
            </div>
        </div>
    </div>

    <div id="colorlib-work">
        <div class="container">
            <div class="row text-center">
                <h2 class="bold">Works</h2>
            </div>

            @include('sections.portfolio')
            </div>
        </div>
    </div>

    <div id="colorlib-blog">
        <div class="container">
            <div class="row text-center">
                <h2 class="bold">Blog</h2>
            </div>
            <div class="row">
                <div class="col-md-12 col-md-offset-0 text-center animate-box intro-heading">
                    <span>Blog</span>
                    <h2>Read Our Case</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="rotate">
                        <h2 class="heading">Our Blog</h2>
                    </div>
                </div>
            </div>
            <div class="row animate-box">
                <div class="owl-carousel1">
                    @include("sections.journal")
                </div>
            </div>
        </div>
    </div>

    <div id="colorlib-testimony">
        <div class="container">
            <div class="row text-center">
                <h2 class="bold">Testimonies</h2>
            </div>
            @include("sections.testimonies")
        </div>
    </div>

    <footer>
        <div id="footer">
            <div class="container">
                @include("sections.footer")
        </div>
    </footer>

</div>

<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<!-- jQuery Easing -->
<script src="js/jquery.easing.1.3.js"></script>
<!-- Bootstrap -->
<script src="js/bootstrap.min.js"></script>
<!-- Waypoints -->
<script src="js/jquery.waypoints.min.js"></script>
<!-- Owl Carousel -->
<script src="js/owl.carousel.min.js"></script>
<!-- Magnific Popup -->
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="../js/magnific-popup-options.js"></script>
{{--Typed Js--}}
<script src="js/typed/typed.js"></script>
<!-- Main JS (Do not remove) -->
<script src="js/main.js"></script>

</body>
</html>


