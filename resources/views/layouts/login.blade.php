<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login / Register</title>

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

    <style>
        @import url('https://fonts.googleapis.com/css?family=Raleway:400,700');

* {
	box-sizing: border-box;
	margin: 0;
	padding: 0;
	font-family: Raleway, sans-serif;
}

body {
	background: linear-gradient(90deg, #C7C5F4, #776BCC);
}

.container {
	display: flex;
	align-items: center;
	justify-content: center;
	min-height: 100vh;
}

.screen {
	background: linear-gradient(90deg, #5D54A4, #7C78B8);
	position: relative;
	height: 600px;
	width: 360px;
	box-shadow: 0px 0px 24px #5C5696;
}

.screen__content {
	z-index: 1;
	position: relative;
	height: 100%;
}

.screen__background {
	position: absolute;
	top: 0;
	left: 0;
	right: 0;
	bottom: 0;
	z-index: 0;
	-webkit-clip-path: inset(0 0 0 0);
	clip-path: inset(0 0 0 0);
}

.screen__background__shape {
	transform: rotate(45deg);
	position: absolute;
}

.screen__background__shape1 {
	height: 520px;
	width: 520px;
	background: #FFF;
	top: -50px;
	right: 120px;
	border-radius: 0 72px 0 0;
}

.screen__background__shape2 {
	height: 220px;
	width: 220px;
	background: #6C63AC;
	top: -172px;
	right: 0;
	border-radius: 32px;
}

.screen__background__shape3 {
	height: 540px;
	width: 190px;
	background: linear-gradient(270deg, #5D54A4, #6A679E);
	top: -24px;
	right: 0;
	border-radius: 32px;
}

.screen__background__shape4 {
	height: 400px;
	width: 200px;
	background: #7E7BB9;
	top: 420px;
	right: 50px;
	border-radius: 60px;
}

.login {
	width: 320px;
	padding: 30px;
	padding-top: 156px;
}

.login__field {
	padding: 20px 0px;
	position: relative;
}

.login__icon {
	position: absolute;
	top: 30px;
	color: #7875B5;
}

.login__input {
	border: none;
	border-bottom: 2px solid #D1D1D4;
	background: none;
	padding: 10px;
	padding-left: 24px;
	font-weight: 700;
	width: 75%;
	transition: .2s;
}

.login__input:active,
.login__input:focus,
.login__input:hover {
	outline: none;
	border-bottom-color: #6A679E;
}

.login__submit {
	background: #fff;
	font-size: 14px;
	margin-top: 30px;
	padding: 16px 20px;
	border-radius: 26px;
	border: 1px solid #D4D3E8;
	text-transform: uppercase;
	font-weight: 700;
	display: flex;
	align-items: center;
	width: 70%;
	color: #4C489D;
	box-shadow: 0px 2px 2px #5C5696;
	cursor: pointer;
	transition: .2s;
}

.login__submit:active,
.login__submit:focus,
.login__submit:hover {
	border-color: #6A679E;
	outline: none;
}

.button__icon {
	font-size: 24px;
	margin-left: auto;
	color: #7875B5;
}

.social-login {
	position: absolute;
	height: 140px;
	width: 160px;
	text-align: center;
	bottom: 0px;
	right: 0px;
	color: #fff;
}

.social-icons {
	display: flex;
	align-items: center;
	justify-content: center;
}

.social-login__icon {
	padding: 20px 10px;
	color: #fff;
	text-decoration: none;
	text-shadow: 0px 0px 8px #7875B5;
}

.social-login__icon:hover {
	transform: scale(1.5);
}
    </style>
</head>
<body>
<div class="container">
<main class="py-4">
            @yield('content')
</main>
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
