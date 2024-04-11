@extends('layouts.base')
@section('title', 'Admin Dashboard')
@section('css')
<link rel="stylesheet" href="{{ asset('css/admin/dashboard.css')}}">
<link rel="stylesheet" href="{{ asset('css/global.css')}}">
@endsection
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
<!-- Styles  -->
<link rel="shortcut icon" href="assets/img/kxp_fav.png" type="image/x-icon">
<link rel="stylesheet" href="assets/css/style.css">
 





<div class="sidebar close">
    <!-- ========== Logo ============  -->
    <a href="#" class="logo-box">
      <div> <img src="{{ asset('images/spc_logo.png') }}" alt="spc-logo"></div>
        <div class="logo-name">San Pedro Colleges</div>
    </a>

    <!-- ========== List ============  -->
    <ul class="sidebar-list">
        <!-- -------- Non Dropdown List Item ------- -->
        <li>
            <div class="title">
                <a href="#" class="link">
                    <i class='bx bx-grid-alt'></i>
                    <span class="name">Dashboard</span>
                </a>
                <!-- <i class='bx bxs-chevron-down'></i> -->
            </div>
            <div class="submenu">
                <a href="#" class="link submenu-title">Dashboard</a>
                <!-- submenu links here  -->
            </div>
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
                    <i class='bx bxs-log-out'></i>
                    <span class="name">Logout</span>
                </a>
                <!-- <i class='bx bxs-chevron-down'></i> -->
            </div>
            <div class="submenu">
                <a href="#" class="link submenu-title">Logout</a>
                <!-- submenu links here  -->
            </div>
        </li>
    </ul>
</div>

<!-- ============= Home Section =============== -->
<section class="home">
    <div class="toggle-sidebar">
        <i class='bx bx-menu'></i>
        <div class="text">Dashboard</div>
    </div>
   
    </div>
</section>



<!-- Link JS -->
<script >
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
const logo = document.querySelector(".logo-box");
const sidebar = document.querySelector(".sidebar");

toggleSidebar.addEventListener("click", () => {
  sidebar.classList.toggle("close");
});

logo.addEventListener("click", () => {
  sidebar.classList.toggle("close");
});

</script>
    <link rel="stylesheet" href="{{ asset('css/global.css') }}">
@endsection
@section('content')
    <div class="container-fluid">
        <button type="button" id="logoutBtn">Logout</button>
    </div>

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
@endsection
