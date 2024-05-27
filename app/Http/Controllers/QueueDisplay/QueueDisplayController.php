<?php

namespace App\Http\Controllers\QueueDisplay;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class QueueDisplayController extends Controller
{
    public function index(){
        return view("QueueDisplayView.mainqueuedisplay");
    }

    public function displayCashierQue(){
        $cashierUser = User::select('status', 'usertype_id', 'designation_id')
                        ->where("usertype_id", "=", 1)
                        ->where('status', '=', 'Verified')
                        ->with("user_type", "designation")->get();
        return $cashierUser;
    }

    public function displayAssesorQue(){
        $assesorUser = User::select('status','usertype_id', 'designation_id')->where("usertype_id", "=", 2)
                        ->where('status', '=', 'Verified')
                        ->with("user_type", "designation")->get();
        return $assesorUser;
    }

    public function displayCashierCurrQue(){
        // $currServe = Cache::get('currServe', 'default');
    }
}
