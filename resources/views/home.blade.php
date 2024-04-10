@extends('layouts.base')
@section('title', 'Admin Dashboard')
@section('css')
<link rel="stylesheet" href="{{ asset('css/admin/dashboard.css')}}">
<link rel="stylesheet" href="{{ asset('css/global.css')}}">
@endsection
 
<div class="container-fluid">
    <!-- ___________________________>SidePanel ____________________________-->
    <!-- <div class="sidepanel">
        <div class="container-fluid">
            <div class="image-container">
                <a href="/"><img src="{{ asset('images/spc_logo.png') }}" alt="spc-logo"></a>
                <h2>San Pedro College</h2>
            </div>
        </div>
        <div class="content">  
            <a href="">Dashboard</a>
            <a href="">Trasanctions</a>
            <a href="">Users</a>
            <a href="">Logout</a>
        </div> 
    </div>
     -->

     <div class="sidepanel">
        <div class="sidepanel-logo">
            <a href="/"><img src="{{ asset('images/spc_logo.png') }}" alt="spc-logo"></a>              
            <h2>San Pedro College</h2>  
        </div>
        <div class="sidepanel-content">
            <div class="item-wraper">
                <div class="item-logo"></div>
                <a href="">Dashboard</a>
            </div>
            <div class="item-wraper">
                <div class="item-logo"></div>
                <a href="">Trasanctions</a>
            </div>
            <div class="item-wraper">
                <div class="item-logo"></div>
                <a href="">Users</a>
            </div>
        </div>
        <div class="logout-container">
            <div class="item-logo"></div>
            <a href="">Logout</a>
        </div>
     </div>
    <!-- ___________________________>Content ____________________________-->
    <div class="container">
        <div>
            <table class="class">
                <thead>
                    <tr>
                        <td>Time</td>
                        <td>Job</td>
                        <td>Transaction No.</td>
                        <td>Status</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <td>Time</td>
                    <td>Job</td>
                    <td>Transaction No.</td>
                    <td>Active</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>