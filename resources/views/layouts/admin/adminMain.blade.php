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
     <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
         rel="stylesheet">
     <link rel="icon" type="image/png" href="{{ asset('images/spc_logo.png') }}" />
     <link rel="stylesheet" href="{{ asset('css/global.css') }}">
     <link rel="stylesheet" href="{{ asset('css/admin/dashboard.css') }}">

     @vite('resources/sass/app.scss')
 </head>

 <body class="hold-transition sidebar-mini">
     <div class="wrapper" id="app">
         <aside class="main-sidebar sidebar-dark-primary elevation-4">
             <div class="spc-logo">
                <a href="{{ route('AdminDash') }}">
                    <img src="{{ asset('images/spc_logo.png') }}" alt="spc-logo">
                </a>
                <h4>San Pedro College</h4>
             </div>
             <nav class="navbar navbar-expand-lg">
                 <ul class="nav nav-pills nav-sidebar flex-column">
                     <div class="navbar-div">
                         <li class="nav-item">
                             <router-link to="/admin/dashboard" class="nav-link">
                                 <div class="linknav">
                                    <i class='bx bxs-dashboard'></i>
                                     <span>Dashboard</span>
                                 </div>
                             </router-link>
                         </li>
                     </div>
                     <div class="navbar-div">
                         <li class="nav-item">
                             <router-link to="/admin/user" class="nav-link">
                                 <div class="linknav">
                                     <i class='bx bx-user-circle'></i>
                                     <span>User</span>
                                 </div>
                             </router-link>
                         </li>
                     </div>
                     <div class="navbar-div">
                         <li class="nav-item">
                             <router-link to="/admin/usertype" class="nav-link">
                                 <div class="linknav">
                                    <i class='bx bx-category'></i>
                                     <span>Manage User Type</span>
                                 </div>
                             </router-link>
                         </li>
                     </div>
                     <div class="navbar-div">
                         <li class="nav-item">
                             <router-link to="/admin/logs" class="nav-link">
                                 <div class="linknav">
                                    <i class='bx bxs-report'></i>
                                     <span>Logs</span>
                                 </div>
                             </router-link>
                         </li>
                     </div>
                     <div class="navbar-div">
                         <li class="nav-item">
                             <router-link to="/admin/profile" class="nav-link">
                                 <div class="linknav">
                                    <i class='bx bxs-user-detail'></i>
                                     <span>Profile</span>
                                 </div>
                             </router-link>
                         </li>
                     </div>
                     <div class="navbar-div">
                         <li class="nav-item">
                             <a href="{{ route('logout') }}" class="nav-link">
                                 <div class="linknav">
                                    <i class='bx bx-log-out-circle'></i>
                                     <span class="name">Logout</span>
                                 </div>
                             </a>
                         </li>
                     </div>
                 </ul>
             </nav>
         </aside>
         <div class="content-wrapper">
             <router-view></router-view>
         </div>
     </div>
     @vite('resources/js/app.js')
     <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
     @include('sweetalert::alert')
     <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.js" integrity="sha512-+k1pnlgt4F1H8L7t3z95o3/KO+o78INEcXTbnoJQ/F2VqDVhWoaiVml/OEHv9HsVgxUaVW+IbiZPUJQfF/YxZw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 </body>

 </html>
