@extends('layouts.app')

@section('title','Thank You For Shopping')


@section('content')

<div class="container my-5">

    <div class="container text-center text-green mt-5">


        <img src="{{ asset('front/img/siparis_logo2.png')}}" alt="">
    </div>
    <div class="container mt-3">
        <h2 class="text-center text-dark"><b style="color:black;"> Your order has been received.</b></h2>
        <p class="text-center text-dark"><b style="color:black;">The details of your order have been sent to your
                e-mail.</b> </p><br>

        <p class="text-center text-dark"><b style="color:black;">Feel happy while using it.</b> </p>

    </div>
</div>

@endsection
