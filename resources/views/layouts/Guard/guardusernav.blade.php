<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guard</title>

    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet"
        href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Lora' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <link rel="icon" type="image/png" href="{{ asset('images/spc_logo.png') }}" />
    <link rel="stylesheet" href="{{ asset('css/global.css') }}">
    <link rel="stylesheet" href="{{ asset('css/nav/guardpublic.css') }}">

    @vite('resources/sass/app.scss')
</head>

<body>
    <div class="wrapper" id="app">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light navbar-custom ">
            <div class="container">
                <!-- logo -->
                <a class="navbar-brand m-0" href="#">

                    <img class="d-inline-block align-center " src="{{ asset('images/spc_logo.png') }}" alt="spc-logo"
                        width="80" height="80">
                    <div class="display-6">San Pedro College</div>
                </a>
                <!-- Toggle Btn -->
                
                <button class="navbar-toggler navbar-light shadow-0 border-0" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                    <span class="" role="button" >
                        <i class="fa fa-bars" aria-hidden="true" style="color:#e6e6ff"></i></span>
                </button>
                <!-- Sidebar -->
                <div class=" sidebar offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar"
                    aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                       
                        <button type="button" class="btn-close sticky-top" data-bs-dismiss="offcanvas" aria-label="Close">
                        </button>
                        <div class="offcanvas-title fs-4 d-flex flex-column justify-content-center align-items-center " id="offcanvasNavbarLabel">
                            <img class="d-inline-block align-center" src="{{ asset('images/spc_logo.png') }}"
                                alt="spc-logo" width="200" height="200">
                                <h5>SanPedro College</h5>
                        </div>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                            <li class=" nav-item ">
                                <a class=" nav-link " aria-current="page" href="#">
                                    <i class="fa-solid fa-user"></i>
                                    <div class="display-6"> Profile</div>
                                </a>
                            </li>
                            <li class=" nav-item ">
                                <a class=" nav-link " aria-current="page" href="#">
                                    <i class="fa-solid fa-sign-out"></i>
                                    <div class="display-6"> Logout</div>
                                </a>
                            </li>
                            <div class="btn-group dark">

                                <button type="button" class="btn btn-secondary bg-transparent"
                                    data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
                                    @if (Auth::check())
                                        
                                    <div class="display-6">{{ Auth::user()->name }}</div>
                                    @endif
                                    <div class="main-image-div">
                                        <img src="{{ asset('images/spc_logo.png') }}" alt="profile-sample">
                                    </div>
                                </button>


                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-lg-end">
                                    <li class=" nav-item btn-group ">
                                        <a class=" nav-link " aria-current="page" href="#">
                                            <i class="fa-solid fa-user btn-group"></i>
                                            <div class="display-6"> Profile</div>
                                        </a>
                                    </li>

                                    <li class=" nav-item btn-group">
                                        <a class=" nav-link " aria-current="page" href="{{ route('logout') }}">
                                            <i class="fa-solid fa-sign-out btn-group"></i>
                                            <div class="display-6"> Logout</div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <div class="content-wrapper">
            <router-view></router-view>
        </div>
    </div>

    @vite('resources/js/app.js')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @include('sweetalert::alert')
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.js" integrity="sha512-+k1pnlgt4F1H8L7t3z95o3/KO+o78INEcXTbnoJQ/F2VqDVhWoaiVml/OEHv9HsVgxUaVW+IbiZPUJQfF/YxZw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/45e9201bc9.js" crossorigin="anonymous"></script>
</body>

</html>
