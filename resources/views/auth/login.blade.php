@extends('layouts.login')

@section('content')
<div class="container">
    <div class="screen">
        <div class="screen__content">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="login__field " style="margin-top: 100px !important; margin-left:20px !important;">
                    <i class="login__icon fas fa-user"></i>
                    <input id="email" type="email" class="login__input @error('email') is-invalid @enderror"
                        placeholder="User name / Email" name="email" value="{{ old('email') }}" required
                        autocomplete="email" autofocus>

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="login__field" style="margin-top: 30px !important; margin-left:20px !important;">
                    <i class="login__icon fas fa-lock"></i>
                    <input id="password" type="password" class="login__input @error('password') is-invalid @enderror"
                        placeholder="Password" name="password" required autocomplete="current-password">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <button class="button login__submit"
                    style="margin-top: 100px !important;  margin:30px !important; margin-bottom:20px !important; ">
                    <span class="button__text">Login Now</span>
                    <i class="button__icon fas fa-chevron-right"></i>
                </button>


            </form>

            <a href="{{ url('register') }}" style="  margin-top:100px !important; margin-left:55px !important;"><b
                        style="color:black;">New Here ?</b>
                    <span style="color:white;">Register Now</span> </a>
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
