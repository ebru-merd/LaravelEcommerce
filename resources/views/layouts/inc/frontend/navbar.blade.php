<!-- ? Preloader Start -->
<div id="preloader-active">
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-inner position-relative">
            <div class="preloader-circle"></div>
            <div class="preloader-img pere-text">
                <img src="{{ asset('front/img/logo/logo2.png')}}" alt="">
            </div>
        </div>
    </div>
</div>
<!-- Preloader Start-->
<header>

    <!-- Header Start -->
    <div class="header-area ">
        <div class="main-header header-sticky">
            <div class="container-fluid">
                <div class="menu-wrapper d-flex align-items-center justify-content-between">
                    <div class="header-left d-flex align-items-center">
                        <!-- Logo -->
                        <div class="logo">
                            <a href="{{ url('/') }}"><img src="{{ asset('front/img/logo/logo3.png')}}" alt=""
                                    width="200px"></a>
                        </div>
                        <!-- Main-menu -->

                    </div>

                    <div class="header-left d-flex align-items-center">
                        <!-- Logo -->

                        <!-- Main-menu -->
                        <div class="main-menu  d-none d-lg-block">
                            <nav>
                                <ul id="navigation">
                                    <li><a href="{{ url('/') }}">Home</a></li>
                                    <li><a href="{{ url('/collections') }}">All Categories</a></li>
                                    <li><a href="{{ url('/new-arrivals') }}">New Arrivals</a></li>

                                    <li><a href="{{ url('/orders') }}">Orders</a></li>


                                </ul>


                            </nav>
                        </div>
                    </div>
                    <div class="header-right d-flex align-items-center">
                        <!-- Main-menu -->
                        <div class="main-menu  d-none d-lg-block">
                            <nav>
                                <ul id="navigation">

                                    @guest
                                    @if (Route::has('login'))
                                    <li>
                                        <a href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
                                    @endif

                                    @if (Route::has('register'))
                                    <li>
                                        <a href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                    @endif
                                    @else

                                    <li class="nav-item dropdown" >
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            {{ Auth::user()->name }}
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-end-sm" >
                                            <a href="{{ url('profile') }}" class="dropdown-item">Profile</a>
                                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                class="d-none">
                                                @csrf
                                            </form>
                                        </div>
                                    </li>

                                    @endguest
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="header-right1 d-flex align-items-center">
                        <!-- Search Box -->
                        <div class="search d-none d-md-block">
                            <ul class="d-flex align-items-center">

                                <form action="">

                                    <li class="mr-15">
                                        <div class="nav-search search-switch" name="search">
                                            <i class="ti-search"></i>
                                        </div>
                                    </li>

                                </form>

                                <li>
                                    <div class="card-stor">
                                        <a href="{{ url('/cart') }}"> <i class="fa-solid fa-cart-circle-check"></i> <img
                                                src="{{ asset('front/img/gallery/card.svg')}}" alt="">
                                            <span>
                                                < livewire:frontend.cart.cart-count /></span></a>

                                    </div>
                                </li>
                                <li>

                            </ul>
                        </div>
                    </div>


                    <!-- Mobile Menu -->
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
</header>
