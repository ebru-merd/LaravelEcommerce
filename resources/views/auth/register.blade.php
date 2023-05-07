@extends('layouts.login')

@section('content')
<div class="container">
    <div class="screen">
        <div class="screen__content">
            <form method="POST" action="{{ route('register') }}">
                @csrf


                <div class="login__field " style="margin-top: 70px !important; margin-left:20px !important;">
                    <i class="login__icon fas fa-user"></i>
                    <input id="name" type="text" class="login__input @error('name') is-invalid @enderror"
                        placeholder="Username " name="name" value="{{ old('name') }}" required autocomplete="name"
                        autofocus>

                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="login__field " style="margin-top: 10px !important; margin-left:20px !important;">
                    <i class="login__icon fas fa-user"></i>
                    <input id="email" type="email" class="login__input @error('email') is-invalid @enderror"
                        placeholder="Email " name="email" value="{{ old('email') }}" required autocomplete="email">

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="login__field " style="margin-top: 10px !important; margin-left:20px !important;">
                    <i class="login__icon fas fa-lock"></i>
                    <input id="password" type="password" class="login__input @error('password') is-invalid @enderror"
                        name="password" placeholder="Password " required autocomplete="new-password">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="login__field " style="margin-top: 10px !important; margin-left:20px !important;">
                    <i class="login__icon fas fa-lock"></i>
                    <input id="password-confirm" type="password" class="login__input " name="password_confirmation"
                        required placeholder="Confirm Password " autocomplete="new-password">

                </div>

                <button class="button login__submit "
                    style="margin-top: 10px !important;  margin:30px !important; margin-bottom:20px !important; ">
                    <span class="button__text">Register In Now</span>
                    <i class="button__icon fas fa-chevron-right"></i>



                </button>
                <a href="{{ url('login') }}" style="color:black; margin-top: 10px !important;  margin:30px !important; margin-bottom:20px !important; ""><b style="color:black;">I already have an account. </b>
<span style="color:white;">Login Now</span> </a>



            </form>
        </div>
        <div class="screen__background">
            <span class="screen__background__shape screen__background__shape4"></span>
            <span class="screen__background__shape screen__background__shape3"></span>
            <span class="screen__background__shape screen__background__shape2"></span>
            <span class="screen__background__shape screen__background__shape1"></span>
        </div>
    </div>
</div>

@endsection
