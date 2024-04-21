<?php

namespace App\Http\Controllers\Unverified;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UnverifiedUsersContoller extends Controller
{
    public function index(){
        return view("UnverifiedView.mainunverified");
    }
}
