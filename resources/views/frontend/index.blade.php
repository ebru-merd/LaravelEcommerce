@extends('layouts.app')

@section('title','Home')
@section('content')

<!-- ? Preloader Start -->

<!-- header end -->
<main>
    <!--? Hero Area Start-->
    <div class="container-fluid">
        <div class="slider-area">


            <div class="slider-active dot-style">
                <!-- Single -->
                <div class="single-slider slider-bg1 hero-overly slider-height d-flex align-items-center">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-xl-8 col-lg-9">
                                <!-- Hero Caption -->
                                <div class="hero__caption">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single -->
                <div class="single-slider slider-bg2 hero-overly slider-height d-flex align-items-center">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-xl-8 col-lg-9">
                                <!-- Hero Caption -->
                                <div class="hero__caption">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
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
                            <img src="https://sky-static.mavi.com/sys-master/maviTrImages/hff/h20/9708803653662/100980-34748_image_1.jpg_Default-MainProductImage" alt="">
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
                                <a href="{{ url('collections/dress')}}" class="btn">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-popular-items mb-50 text-center wow fadeInUp" data-wow-duration="1s"
                        data-wow-delay=".4s">
                        <div class="popular-img">
                            <img src="https://sky-static.mavi.com/sys-master/maviTrImages/h3d/h51/10068810563614/1210245-85400_image_1.jpg_Default-MainProductImage" alt="">
                            <div class="img-cap">
                                <span>SHIRT</span>
                            </div>
                            <div class="favorit-items">
                                <a href="{{ url('collections/shirt')}}" class="btn">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-popular-items mb-50 text-center wow fadeInUp" data-wow-duration="1s"
                        data-wow-delay=".6s">
                        <div class="popular-img">
                            <img src="https://sky-static.mavi.com/sys-master/maviTrImages/h1b/h85/9972082507806/110703-80899_image_1.jpg_Default-MainProductImage" alt="">
                            <div class="img-cap">
                                <span>Trench coat</span>
                            </div>
                            <div class="favorit-items">
                                <a href="{{ url('collections/trench-coat')}}" class="btn">Shop Now</a>
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
