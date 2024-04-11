<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
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
    <link rel="stylesheet" href="{{ asset('css/admin/dashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('css/global.css') }}">

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
{{-- @extends('layouts.base')
@section('title', 'Admin')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/admin/dashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('css/global.css') }}">
@endsection

@section('content') --}}

<body>
    <div class="sidebar close" id="app">
        <a href="#" class="logo-box">
            <div> <img src="{{ asset('images/spc_logo.png') }}" alt="spc-logo"></div>
            <div class="logo-name">San Pedro College</div>
        </a>

        <ul class="sidebar-list">
            <li>
                <div class="title">
                    <router-link to="/dashboard" class="nav-link">
                        <i class='bx bx-grid-alt'></i>
                        <span class="name">Dashboard</span>
                    </router-link>

                    {{-- <a href="#" class="link">
                        <i class='bx bx-grid-alt'></i>
                        <span class="name">Dashboard</span>
                    </a> --}}
                    <!-- <i class='bx bxs-chevron-down'></i> -->
                </div>
                {{-- <div class="submenu">
                    <a href="#" class="link submenu-title">Dashboard</a>
                </div> --}}
            </li>

            <!-- -------- Dropdown List Item ------- -->
            <li class="dropdown">
                <div class="title">
                    <a href="#" class="link">
                        <i class='bx bx-collection'></i>
                        <span class="name">Transaction</span>
                    </a>
                    <i class='bx bxs-chevron-down'></i>
                </div>
                <div class="submenu">
                    <a href="#" class="link submenu-title">Transaction</a>
                    <a href="#" class="link">Transaction List</a>
                    <a href="#" class="link">Manage Transaction</a>
                </div>
            </li>

            <li>
                <div class="title">
                    <a href="#" class="link">
                        <i class='bx bx-user-circle'></i>
                        <span class="name">Users</span>
                    </a>
                    <!-- <i class='bx bxs-chevron-down'></i> -->
                </div>
                <div class="submenu">
                    <a href="#" class="link submenu-title">Users</a>
                </div>
            </li>


            <li>
                <div class="title">
                    <a href="#" class="link">
                        <i class='bx bxs-log-out'></i>
                        <span class="name" id="logoutBtn">Logout</span>
                    </a>
                </div>
                <div class="submenu">
                    <span class="link submenu-title" id="logoutBtn">Logout</span>
                </div>
            </li>
        </ul>
    </div>

    <div class="home">
        <div class="upper-toogle-nav">
            <div class="toggle-sidebar">
                <a class="purple-head hover-black" onclick="changeIcon(this)">
                    <i class='bx bx-last-page' id="bx-last-page"></i>
                </a>
            </div>
            <span class="text">Dashboard</span>
        </div>
    </div>
</body>

</html>


<script>
    const listItems = document.querySelectorAll(".sidebar-list li");
    listItems.forEach((item) => {
        item.addEventListener("click", () => {
            let isActive = item.classList.contains("active");

            listItems.forEach((el) => {
                el.classList.remove("active");
            });

            if (isActive) item.classList.remove("active");
            else item.classList.add("active");
        });
    });

    const toggleSidebar = document.querySelector(".toggle-sidebar");
    const sidebar = document.querySelector(".sidebar");

    toggleSidebar.addEventListener("click", () => {
        sidebar.classList.toggle("close");
    });

    function changeIcon(anchor) {
        var icon = anchor.querySelector("i");
        icon.classList.toggle('bx-last-page');
        icon.classList.toggle('bx-first-page');
    }
</script>


<script>
    document.getElementById('logoutBtn').addEventListener('click', function() {
        axios.get('/logout')
            .then(function(response) {
                Swal.fire({
                    position: "center",
                    icon: "success",
                    title: "Logout Successfully!",
                    showConfirmButton: false,
                    timer: 1000
                }).then(() => {
                    window.location.href = response.data.redirect;
                });
            })
            .catch(function(error) {
                // Handle errors
                console.error(error);
            });
    });
</script>
{{-- @endsection --}}
