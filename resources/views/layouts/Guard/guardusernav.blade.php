<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guard</title>

    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel= "stylesheet"
        href= "https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
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
    <link rel="stylesheet" href="{{ asset('css/nav/usernav.css') }}">

    @vite('resources/sass/app.scss')
</head>

<body>
    <div class="wrapper" id="app">
        <aside>
            <div class="container-fluid">
                <nav class="navbar navbar-expand-sm navbar-light navbar-dark align-center">.
                    <div class="container">
                        <div class="logo">
                            <a href="{{ route('guard') }}" class="navbar-brand mb-0 h1  ">
                                <img class="d-inline-block align-center" src="{{ asset('images/spc_logo.png') }}"
                                    alt="spc-logo" width="40" height="60">
                            </a>
                            <h3>San Pedro Colleges</h3>
                        </div>
                        <button class="btn">
                            <div class="logout">
                                <span>Logout</span>
                                <i class='bx bx-log-out'></i>
                            </div>
                        </button>

                    </div>
                </nav>
            </div>
        </aside>
        <div class="content-wrapper">
            <GuardView></GuardView>
            <router-view></router-view>
        </div>
    </div>


    @vite('resources/js/app.js')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.js"
        integrity="sha512-+k1pnlgt4F1H8L7t3z95o3/KO+o78INEcXTbnoJQ/F2VqDVhWoaiVml/OEHv9HsVgxUaVW+IbiZPUJQfF/YxZw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

</html>
