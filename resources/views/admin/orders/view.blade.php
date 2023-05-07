@extends('layouts.admin')

@section('title','My Order Details')

@section('content')

<div class="py-3 py-md-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

            @if(session('message'))
            <div class="alert alert-success mb-3">{{ session('message')}}</div>

            @endif
                <div class="shadow bg-white p-3">
                    <h4 class="text-primary">
                        <i class="fa fa-shopping-cart text-dark"></i><b style="color:black;"> My Order Details</b>

                        <a href="{{ url('admin/orders')}}" class="btn btn-danger btn-sm float-end mx-1"><b >
                        Back</b>
                        </a>

                        <a href="{{ url('admin/invoice/'.$order->id.'/generate')}}" class="btn btn-primary btn-sm float-end mx-1"><b >
                        Download Invoice</b>
                        </a>

                        <a href="{{ url('admin/invoice/'.$order->id)}}" target="_blank" class="btn btn-warning btn-sm float-end mx-1"><b >
                        View Invoice</b>
                        </a>

                        <a href="{{ url('admin/invoice/'.$order->id.'/mail')}}" class="btn btn-info btn-sm float-end mx-1"><b >
                        Send Invoice Via Mail</b>
                        </a>
                    </h4>
                    <hr>

                    <div class="row">
                        <div class="col-md-6">
                            <h5><b style="color:black; font-size:15px ;">Order Details</b> </h5>
                            <hr>

                            <h6><b style="font-size:13px ;color:black;">Order Id:{{ $order->id}}</b> </h6>
                            <h6><b style="font-size:13px ;color:black;">Tracking Id/No.: {{ $order->tracking_no}}</b>
                            </h6>
                            <h6><b style="font-size:13px ;color:black;">Ordered Date:
                                    {{ $order->created_at->format('d-m-Y h:i A')}}</b> </h6>
                            <h6><b style="font-size:13px ;color:black;">Payment Mode: {{ $order->payment_mode}}</b>
                            </h6>
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

                <div class="card border mt-3" style="border-radius:0px !important;">
                    <div class="card-body">
                        <h4>Order Process (Order Status Update)</h4>
                        <hr>
                        <div class="row">
                            <div class="col-md-5">
                                <form action="{{ url('admin/orders/'.$order->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')

                                    <label>Update Your Order Status</label>
                                    <div >
                                        <select name="order_status" class="form-select">
                                            <option value="">Select Order Status</option>
                                            <option value="in progress"
                                                {{ Request::get('status') == 'in progress' ? 'selected' : ''}}>In
                                                Progress</option>
                                            <option value="completed"
                                                {{ Request::get('status') == 'completed' ? 'selected' : '' }}>Completed
                                            </option>
                                            <option value="pending"
                                                {{ Request::get('status') == 'pending' ? 'selected' : ''}}>Pending
                                            </option>
                                            <option value="cancelled"
                                                {{ Request::get('status') == 'cancelled' ? 'selected' : ''}}>Cancelled
                                            </option>
                                            <option value="out-for-delivery"
                                                {{ Request::get('status') == 'out-for-delivery' ? 'selected' : ''}}> Out
                                                for delivery</option>
                                        </select> <br>
                                        <button class="btn btn-primary text-white" type="submit">Update</button>
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-6">
                                <br>
                                <h4 class="mt-3">Current Order Status: <span class="text-uppercase">{{ $order->status_message}}</span></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
