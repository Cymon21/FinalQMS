@extends('layouts.base')
@section('title', 'Login')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/auth/forgotpassword.css')}}">
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
                <h2>Forgot Password</h2>
                <p>Enter your registered email to reset your password</p>
                <form action="" method="">
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter your registered email" required />
                    </div>
                    <div class="form-group">
                       <button type="submit">Reset Password</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection