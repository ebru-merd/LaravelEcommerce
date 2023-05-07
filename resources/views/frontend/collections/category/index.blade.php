@extends('layouts.app')

@section('title','All Categories')
@section('content')

<!-- breadcrumb Start-->
<div class="page-notification">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li ><a href="index.html">Home > </a></li>
                        <li ><a href="#">  All Categories</a></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- listing Area Start -->
<div class="category-area">
    <div class="container">


        <!--?  Right content -->
        <div class="col-md-12">
            <!--? New Arrival Start -->
            <div class="new-arrival new-arrival2">
                <div class="row">

                    @forelse($categories as $categoryItem)
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                        <div class="single-new-arrival mb-50 text-center">
                            <div class="popular-img">
                            <img src="{{ asset($categoryItem->image )}}" alt="vbnm">
                                <div class="favorit-items">
                                    <!-- <span class="flaticon-heart"></span> -->


                                </div>
                            </div>
                            <div class="popular-caption">
                                <h3><a
                                        href="{{ url('/collections/'.$categoryItem->slug) }}">{{ $categoryItem->name }}</a>
                                </h3>


                            </div>
                        </div>
                    </div>
                    @empty
                    @endforelse
                </div>
                <!--? New Arrival End -->
            </div>
        </div>
    </div>
</div>
<!-- listing-area Area End -->


@endsection
