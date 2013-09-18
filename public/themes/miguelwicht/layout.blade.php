<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="{{ asset(theme_path('css/bootstrap.min.css')) }}" rel="stylesheet" media="screen">
    <link href="{{ asset(theme_path('css/style.css')) }}" rel="stylesheet" media="screen">
</head>
<body>
    <div class="page-wrapper">
        <header class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
                    <button type="button"class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Be sure to leave the brand out there if you want it shown -->
                    <a href="{{ wardrobe_url('/') }}" class="navbar-brand">{{ site_title() }}</a>
                </div>
                <!-- Everything you want hidden at 940px or less, place within here -->
                <div class="collapse navbar-collapse" role="navigation">
                    <ul class="nav navbar-nav navbar-right">
                        <li{{ Request::is('posts*') ? ' class="active"' : '' }}><a href="{{ wardrobe_url('/posts') }}">Posts</a></li>
                        <li{{ Request::is('projects*') ? ' class="active"' : '' }}><a href="{{ wardrobe_url('projects') }}">Projects</a></li>
                        {{--<li{{ Request::is('about') ? ' class="active"' : '' }}><a href="{{ wardrobe_url('about') }}">About</a></li>--}}
                    </ul>
                    <!-- .nav, .navbar-search, .navbar-form, etc -->
                </div>
            </div>
        </header>


        <div class="content">
            @yield('content')
        </div>
    </div>
    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>Follow me on <a href="http://twitter.com/miguelwicht">Twitter</a> and <a href="http://github.com/miguelwicht">Github</a>.</p>
                    <p><a href="{{ wardrobe_url('archive') }}">Archive</a> - <a href="{{ wardrobe_url('rss') }}">RSS</a> - <a href="{{ wardrobe_url('impressum') }}">Legal Notice</a></p>
                    <p>Powered by <a href="http://wardrobecms.com">Wardrobe</a></p>
                </div>
            </div>
        </div>
    </footer>
    @if(!Request::is('post/preview*'))
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
    @endif
    <script src="{{ asset(theme_path('js/bootstrap.min.js')) }}"></script>
    <script src="{{ asset('js/jquery.lazyBootstrapCarousel.js') }}"></script>
    <script src="{{ asset('js/jquery.fitvids.js') }}"></script>
    <script src="{{ asset('js/jquery.touchSwipe.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>
