@extends('layouts.base')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/global.css')}}">
    <link rel="stylesheet" href="{{ asset('css/welcome.css')}}">
    <link rel="stylesheet" href="{{ asset('css/nav/welcomeNav.css')}}">
@endsection

@section('navBar')
    @include('layouts.welcome.welcomeNav')
@endsection

@section('content')
    <div class="container-fluid">
        <div class="header-content">
            <div class="header-main">
                <h1>San Pedro College <br>Queue Management System</h1>
            </div>
            <div class="divider"></div>
            <div class="header-context">
                <p>A queue management system streamlines customer flow, reduces wait times, and enhances service efficiency. 
                    <br>It's a smart solution for businesses to boost customer satisfaction and optimize resource allocation.
                </p>
            </div>
            <div class="header-main-btn">
                <a href="{{route('auth.login')}}"><button type="button">Get Started</button></a>
            </div> 
        </div>
    </div>
@endsection