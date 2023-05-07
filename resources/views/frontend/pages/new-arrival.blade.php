@extends('layouts.app')

@section('title','New Arrivals Product')

@section('content')

<!-- breadcrumb Start-->
<div class="page-notification">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a  href="index.html">Home </a></li>
                        <li class="breadcrumb-item"><a  href="#"> New Arrivals</a></li>
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

                    @forelse ($newArrivalProducts as $productItem)
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                        <div class="single-new-arrival mb-50 text-center">

                            <div class="popular-img">


                                @if($productItem->productImages->count() >0)
                                <a
                                    href="{{ url('/collections/'.$productItem->category->slug.'/'.$productItem->slug) }}">
                                    <img src="{{ asset($productItem->productImages[0]->image)}}"
                                        alt="{{ $productItem->name}}">

                                </a>
                                @endif
                                <div class="favorit-items">

                                    <!-- <span class="flaticon-heart"></span> -->
                                    <label class="stock bg-warning text-white " style="border-radius:5px !important; width:50px; font-size:10px; padding:5px; left:50px; !important">New</label>
                                    <br>
                                    @if($productItem->quantity)
                                    <label class="stock bg-success text-white" style="border-radius:5px !important; font-size:10px; padding:5px; left:0px;">In Stock </label>

                                    @else
                                    <label class="stock bg-danger text-white" style="border-radius:5px !important; font-size:10px; padding:5px; ">Out Of
                                            Stock </label>

                                    @endif


                                </div>


                            </div>
                            <div class="popular-caption">
                                <h3><a
                                        href="{{ url('/collections/'.$productItem->category->slug.'/'.$productItem->slug) }}">{{ $productItem->name}}</a>
                                </h3>

                                <span>$ {{$productItem->original_price}}</span>
                            </div>
                            <!-- @if($productItem->quantity >0)
                                <label class="stock bg-success" style="color:white; fontsize:5px">In Stock</label>
                                @else
                                <label class="stock bg-danger" style="color:white;  fontsize:5px">Out Of Stock</label>
                                @endif -->
                        </div>
                    </div>
                    @empty
                    @endforelse
                    <!-- Button -->

                    <div class="text-center">
                        <a href="{{ url('collections') }}" class="border-btn px-3">Show More</a>
                    </div>

                </div>
                <!--? New Arrival End -->
            </div>
        </div>
    </div>
</div>
<!-- listing-area Area End -->

@endsection
