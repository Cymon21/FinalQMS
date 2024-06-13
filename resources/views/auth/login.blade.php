@extends('layouts.base')
@section('title', 'Login')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/auth/login.css') }}">
    <link rel="stylesheet" href="{{ asset('css/global.css') }}">
    <link rel="stylesheet" href="{{ asset('css/nav/welcomeNav.css') }}">
@endsection
{{-- @section('navBar')
    @include('layouts.welcome.welcomeNav')
@endsection --}}
@section('content')
    <div class="container h-100 d-flex align-items-center  ">
        <div class="header-login ">
            <div class="container-fluid ">
                <div class="image-container">
                    <a href="/"><img src="{{ asset('images/spc_logo.png') }}" alt="spc-logo"></a>
                    <h2 class="display-5" >San Pedro College</h2>
                </div>
            </div>
            <div class="login-form ">
                <h2>Sign In</h2>
                <p class="fw-medium">Sign in with your registered email account.</p>
                <form action="{{ route('login.post') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="email" class="form-control" id="email" name="email"
                            placeholder="youremail@gmail.com" required autofocus />
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" class="form-control" id="password" name="password"
                            placeholder="Type your password here" required />
                        <i class="las la-eye" id="togglePassword"></i>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <span style="text-align: right;"><a href="{{ route('auth.forgotpassword') }}">Forgot Password?</a></span>
                    </div>
                    <div class="form-group">
                        <button type="submit">Log In</button>
                        <div class="wordDevider">OR</div>
                        <a href="{{ route('auth.register') }}"><button type="button">Create your account</button></a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        const togglePassword = document.querySelector('#togglePassword');
        const password = document.querySelector('#password');

        togglePassword.addEventListener('click', function(e) {
            // toggle the type attribute
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
            // toggle the eye slash icon
            this.classList.toggle('la-eye-slash');
        });
    </script>
@endsection
