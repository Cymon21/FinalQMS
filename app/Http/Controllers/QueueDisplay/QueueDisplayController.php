<?php

namespace App\Http\Controllers\QueueDisplay;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class QueueDisplayController extends Controller
{
    public function index(){

        return view("QueueDisplayView.mainqueuedisplay");
    }
}
