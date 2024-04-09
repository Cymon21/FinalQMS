@extends('layouts.base')
@section('title', 'Login')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/auth/login.css')}}">
    <link rel="stylesheet" href="{{ asset('css/global.css') }}">
    <link rel="stylesheet" href="{{ asset('css/nav/welcomeNav.css')}}">
@endsection
@section('navBar')
    @include('layouts.welcome.welcomeNav')
@endsection
@section('content')
    <div class="container-fluid">
        <div class="header-login">
            <div class="login-form">
                <h2>Sign In</h2>
                <p>Sign in with your registered email account.</p>
                <form action="" method="">
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="youremail@gmail.com" required />
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Type your password here" required />
                    </div>
                    <div class="form-group">
                       <a href="{{route('auth.forgotpassword')}}" style="text-align: right;"><span>Forgot Password?</span></a>
                    </div>
                    <div class="form-group">
                       <button type="submit">Sign in</button>
                       <div class="wordDevider">OR</div>
                       <a href="{{route('auth.register')}}"><button type="button">Create your account</button></a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection