@extends('layouts.app')

@section('title','My Order Details')

@section('content')

<div class="py-3 py-md-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="shadow bg-white p-3">
                    <h4 class="text-primary">
                        <i class="fa fa-shopping-cart text-dark"></i><b style="color:black;"> My Order Details</b>
                        <a href="{{ url('orders')}}" class="float-end"><b style="color:black;">Back</b> </a>
                    </h4>
                    <hr>

                    <div class="row">
                        <div class="col-md-6">
                            <h5><b style="color:black; font-size:15px ;">Order Details</b> </h5>
                            <hr>

                            <h6><b style="font-size:13px ;color:black;">Order Id:{{ $order->id}}</b> </h6>
                            <h6><b style="font-size:13px ;color:black;">Tracking Id/No.: {{ $order->tracking_no}}</b> </h6>
                            <h6><b style="font-size:13px ;color:black;">Ordered Date:
                                    {{ $order->created_at->format('d-m-Y h:i A')}}</b> </h6>
                            <h6><b style="font-size:13px ;color:black;">Payment Mode: {{ $order->payment_mode}}</b> </h6>
                            <h6 class="border p-2 text-success"><b style="font-size:13px ;color:green;"> Order Status
                                    Message:</b>
                                <span class="text-uppercase"><b
                                        style=" color:green; font-size:13px ;">{{ $order->status_message}}</b> </span>
                            </h6>
                        </div>

                        <div class="col-md-6">
                            <h5><b style="font-size:13px ;color:black;">User Details</b> </h5>
                            <hr>

                            <h6><b style="font-size:13px ;color:black;">Full Name: {{ $order->fullname}}</b> </h6>
                            <h6><b style="font-size:13px ;color:black;">Email Id: {{ $order->email}}</b> </h6>
                            <h6><b style="font-size:13px ;color:black;">Phone: {{ $order->phone}}</b> </h6>
                            <h6><b style="font-size:13px ;color:black;">Address: {{ $order->address}}</b> </h6>
                            <h6><b style="font-size:13px ;color:black;">Pin Code: {{ $order->pincode}}</b> </h6>
                        </div>
                    </div>

                    <br>
                    <h5><b style="font-size:13px ; color:black;">Order Items</b> </h5>
                    <hr>

                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Item Id</th>
                                    <th>Image</th>
                                    <th>Product</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                </tr>


                            </thead>
                            <tbody>

                                @php
                                $totalPrice=0;
                                @endphp
                                @foreach($order->orderItems as $orderItem)
                                <tr>
                                    <td width="10%">{{ $orderItem->id}}</td>
                                    <td width="10%">
                                        @if($orderItem->product->productImages)

                                        <img src="{{ asset($orderItem->product->productImages[0]->image) }}"
                                            style="width:50px; height:50px;" alt="">
                                        @else
                                        <img src="" alt="" style="width:50px; height:50px;">
                                        @endif

                                    </td>
                                    <td>
                                        {{ $orderItem->product->name}}
                                    </td>
                                    <td width="10%">${{ $orderItem->price}}</td>
                                    <td width="10%">{{ $orderItem->quantity}}</td>
                                    <td width="10%" class="fw-bold">${{ $orderItem->quantity * $orderItem->price}}</td>
                                    @php
                                    $totalPrice += $orderItem->quantity * $orderItem->price;
                                    @endphp
                                </tr>

                                @endforeach

                                <tr>
                                    <td colspan="5" class="fw-bold">Total Amount:</td>
                                    <td colspan="1" class="fw-bold">${{ $totalPrice}}</td>
                                </tr>
                            </tbody>
                        </table>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
