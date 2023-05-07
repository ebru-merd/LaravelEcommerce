@extends('layouts.app')

@section('title','User Profile')

@section('content')

<div class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <h4><b style="color:black;">  User Profile</b>
                <a href="{{ url('change-password') }}" class="float-end mb-3 text-center" style="border:2px solid black; background-color:black; color:white; height:35px; padding-top:5px; width:200px;">Change Password ?</a>
                  </h4>
                <div class="underline mb-4"></div>
            </div>

            <div class="col-md-10">

            @if(session('message'))
            <p class="alert alert-success">{{ session('message')}}</p>
            @endif

            @if($errors->any())
            <ul class="alert alert-danger">
                @foreach ($errors->all() as $error)
                <li class="text-danger">{{ $error  }}</li>
                @endforeach
            </ul>
            @endif
                <div class="card shadow">
                    <div class="card-header ">
                        <h4 class="mb-0 text-white"><b style="color:black;"> User Details</b></h4>
                    </div>

                    <div class="card-body">
                        <form action="{{ url('profile') }}" method="POST">
                            @csrf


                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label>Username</label>
                                        <input type="text" name="username" value="{{ Auth::user()->name }}" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label>Email Address</label>
                                        <input type="text" readonly value="{{ Auth::user()->email }}" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label>Phone Number</label>
                                        <input type="text" name="phone" value="{{ Auth::user()->userDetail->phone ?? ''}}" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label>Zip/Pin Code</label>
                                        <input type="text" name="pin_code" value="{{ Auth::user()->userDetail->pin_code ?? ''}}" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label >Address</label>
                                        <textarea name="address"  rows="3" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <button type="submit" style="border:2px solid black; background-color:black; ">Save Data</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
