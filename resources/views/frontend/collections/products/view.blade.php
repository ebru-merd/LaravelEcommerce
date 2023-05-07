@extends('layouts.app')


@section('title')
{{ $product->meta_title}}
@endsection

@section('meta_keyword')
{{ $product->meta_keyword}}
@endsection

@section('meta_description')
{{ $product->meta_description}}
@endsection


@section('content')

<!-- breadcrumb Start-->
<div class="page-notification">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Product</a></li>
                        <li class="breadcrumb-item"><a href="#">Product Details</a></li>
                    </ol>
                </nav>
            </div>


        </div>
    </div>
</div>

<!--?  Details start -->
<div class="directory-details pt-padding">
    <div class="container">
        <div class="row">
            <livewire:frontend.product.view :category="$category" :product="$product" />
        </div>
    </div>
</div>

@endsection
