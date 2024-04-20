<?php

namespace App\Http\Controllers\Guard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GuardController extends Controller
{
    public function index(){
        return view('GuardView.mainguard');
    }
}
