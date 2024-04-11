@extends('layouts.base')
@section('title', 'Admin Dashboard')
@section('css')
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
