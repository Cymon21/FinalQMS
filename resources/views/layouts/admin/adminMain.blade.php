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
     <link rel="stylesheet" href="{{ asset('css/global.css') }}">
     <link rel="stylesheet" href="{{ asset('css/admin/dashboard.css') }}">

     @vite('resources/sass/app.scss')
 </head>

 <body>
    @include('sweetalert::alert')
     <div class="main-wrapper" id="app">
         <div class="sidebar">
             <div class="spc-header">
                 <img src="{{ asset('images/spc_logo.png') }}" alt="spc-logo">
                 <h3>San Pedro College</h3>
             </div>



             <ul class="sidebar-list">
                 <li>
                     <router-link to="/dashboard" class="nav-link">
                         <div class="title">
                             <i class='bx bx-grid-alt'></i>
                             <span class="name">Dashboard</span>
                         </div>
                     </router-link>
                 </li>

                 <li>
                     <router-link to="/transaction" class="nav-link">
                         <div class="title">
                             <i class='bx bx-collection'></i>
                             <span class="name">Transaction</span>
                         </div>
                     </router-link>
                 </li>


                 <li>
                     <router-link to="/user" class="nav-link">
                         <div class="title">
                             <i class='bx bx-user-circle'></i>
                             <span class="name">Users</span>
                         </div>
                     </router-link>
                 </li>
                 <li>
                     <div class="title">
                         <a href="{{ route('logout') }}" style="text-decoration: none;">
                             <i class='bx bxs-log-out'></i>
                             <span class="name">Logout</span>
                         </a>
                     </div>
                 </li>
             </ul>
         </div>
         <div class="wrapper">
             <router-view></router-view>
         </div>
     </div>

     

     @vite('resources/js/app.js')
     <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
 </body>

 </html>
