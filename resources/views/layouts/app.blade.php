<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="@yield('meta_description')">
    <meta name="keyword" content="@yield('meta_keyword')">
    <meta name="author" content="Ebru Merd">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css')}}">

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('front/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('front/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset('front/css/slicknav.css')}}">
    <link rel="stylesheet" href="{{ asset('front/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{ asset('front/css/progressbar_barfiller.css')}}">
    <link rel="stylesheet" href="{{ asset('front/css/gijgo.css')}}">
    <link rel="stylesheet" href="{{ asset('front/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{ asset('front/css/animated-headline.css')}}">
    <link rel="stylesheet" href="{{ asset('front/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{ asset('front/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{ asset('front/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{ asset('front/css/slick.css')}}">
    <link rel="stylesheet" href="{{ asset('front/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{ asset('front/css/style.css')}}">

    <!-- CSS -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
<!-- Default theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/>



    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('front/img/favicon.ico')}}">
    @livewireStyles
</head>

<body class="full-wrapper">
    <div id="app">

    @include('layouts.inc.frontend.navbar')



        <main class="py-4">
            @yield('content')
        </main>

    @include('layouts.inc.frontend.footer')
    </div>

    <!--Scripts -->
    <script src="{{ asset('assets/js/jquery-3.6.4.min.js')}}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js')}}"></script>


        <!-- JS here -->
    <!-- Jquery, Popper, Bootstrap -->
    <script src="{{ asset('front/js/vendor/modernizr-3.5.0.min.js')}}."></script>
    <script src="{{ asset('front/js/vendor/jquery-1.12.4.min.js')}}"></script>
    <script src="{{ asset('front/js/popper.min.js')}}"></script>
    <script src="{{ asset('front/js/bootstrap.min.js')}}"></script>

    <!-- Slick-slider , Owl-Carousel ,slick-nav -->
    <script src="{{ asset('front/js/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('front/js/slick.min.js')}}"></script>
    <script src="{{ asset('front/js/jquery.slicknav.min.js')}}"></script>

    <!-- One Page, Animated-HeadLin, Date Picker -->
    <script src="{{ asset('front/js/wow.min.js')}}"></script>
    <script src="{{ asset('front/js/animated.headline.js')}}"></script>
    <script src="{{ asset('front/js/jquery.magnific-popup.js')}}"></script>
    <script src="{{ asset('front/js/gijgo.min.js')}}"></script>

    <!-- Nice-select, sticky,Progress -->
    <script src="{{ asset('front/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{ asset('front/js/jquery.sticky.js')}}"></script>
    <script src="{{ asset('front/js/jquery.barfiller.js')}}"></script>

    <!-- counter , waypoint,Hover Direction -->
    <script src="{{ asset('front/js/jquery.counterup.min.js')}}"></script>
    <script src="{{ asset('front/js/waypoints.min.js')}}"></script>
    <script src="{{ asset('front/js/jquery.countdown.min.js')}}"></script>
    <script src="{{ asset('front/js/hover-direction-snake.min.js')}}"></script>

    <!-- contact js -->
    <script src="{{ asset('front/js/contact.js')}}"></script>
    <script src="{{ asset('front/js/jquery.form.js')}}"></script>
    <script src="{{ asset('front/js/jquery.validate.min.js')}}"></script>
    <script src="{{ asset('front/js/mail-script.js')}}"></script>
    <script src="{{ asset('front/js/jquery.ajaxchimp.min.js')}}"></script>

    <!-- Jquery Plugins, main Jquery -->
    <script src="{{ asset('front/js/plugins.js')}}"></script>
    <script src="{{ asset('front/js/main.js')}}"></script>

    <!-- JavaScript -->
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
<script>
    window.addEventListener('message', event => {
        alertify.set('notifier','position', 'top-right');
 alertify.success(event.detail.text);
    });

</script>

    @livewireScripts
</body>

</html>
