@extends('layouts.app')

@section('title','About')
@section('content')

<!-- ? Preloader Start -->

<!-- header end -->
<main>
    <!-- breadcrumb Start-->
    <div class="page-notification">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">about</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb End-->
    <!--? Hero Area Start-->
    <div class="container-fluid">
        <!-- About Area Start -->
        <div class="about-area">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="section-tittle mb-60 text-center pt-10">
                            <h2>Our Story</h2>
                            <p class="pera">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                                irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                                pariatur.</p>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="about-img pb-bottom">
                            <img src="{{ asset('front/img/gallery/about1.png ')}}" alt="" class="w-100">
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="section-tittle mb-60 text-center pt-10">
                            <h2>Journey start from</h2>
                            <p class="pera">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                                irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                                pariatur.</p>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="about-img pb-bottom">
                            <img src="assets/img/gallery/about2.png" alt="" class="w-100">
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="section-tittle mb-60 text-center pt-10">
                            <h2>2020</h2>
                            <p class="pera">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                                irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                                pariatur.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About Area End -->
    </div>
    <!-- End Hero -->
    <!--? Popular Items Start -->
    <div class="popular-items pt-50">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-popular-items mb-50 text-center wow fadeInUp" data-wow-duration="1s"
                        data-wow-delay=".1s">
                        <div class="popular-img">
                            <img src="https://sky-static.mavi.com/sys-master/maviTrImages/hff/h20/9708803653662/100980-34748_image_1.jpg_Default-MainProductImage"
                                alt="">
                            <div class="img-cap">
                                <span>JEAN</span>
                            </div>
                            <div class="favorit-items">
                                <a href="{{ url('collections/jean')}}" class="btn">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-popular-items mb-50 text-center wow fadeInUp" data-wow-duration="1s"
                        data-wow-delay=".2s">
                        <div class="popular-img">
                            <img src="https://sky-static.mavi.com/sys-master/maviTrImages/he3/h57/9813641691166" alt="">
                            <div class="img-cap">
                                <span>DRESSES</span>
                            </div>
                            <div class="favorit-items">
                                <a href="{{ url('collections/elbise')}}" class="btn">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-popular-items mb-50 text-center wow fadeInUp" data-wow-duration="1s"
                        data-wow-delay=".4s">
                        <div class="popular-img">
                            <img src="https://sky-static.mavi.com/sys-master/maviTrImages/h3d/h51/10068810563614/1210245-85400_image_1.jpg_Default-MainProductImage"
                                alt="">
                            <div class="img-cap">
                                <span>SHIRT</span>
                            </div>
                            <div class="favorit-items">
                                <a href="{{ url('collections/gomlek')}}" class="btn">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-popular-items mb-50 text-center wow fadeInUp" data-wow-duration="1s"
                        data-wow-delay=".6s">
                        <div class="popular-img">
                            <img src="https://sky-static.mavi.com/sys-master/maviTrImages/h1b/h85/9972082507806/110703-80899_image_1.jpg_Default-MainProductImage"
                                alt="">
                            <div class="img-cap">
                                <span>Trench coat</span>
                            </div>
                            <div class="favorit-items">
                                <a href="{{ url('collections/trenckot')}}" class="btn">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Popular Items End -->

    <br>


    @endsection
