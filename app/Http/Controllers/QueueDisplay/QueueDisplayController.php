<?php

namespace App\Http\Controllers\QueueDisplay;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\QueueNumModel;
use Illuminate\Support\Facades\DB;

class QueueDisplayController extends Controller

{
    public function index(){
        return view("QueueDisplayView.mainqueuedisplay");
    }

    public function displayCashierQue(){
        $cashierUser = User::select('id', 'status', 'usertype_id', 'designation_id')
                        ->where("usertype_id", "=", 1)
                        ->with(['que' => function($query) {
                            $query->where('que_status', 'Serving');
                        }])
                        ->where('status', '=', 'Verified')
                        ->with("user_type", "designation")->get();
        return $cashierUser;
    }

    public function displayAssesorQue(){
        $assesorUser = User::select('id', 'status', 'usertype_id', 'designation_id')
                        ->where("usertype_id", "=", 2)
                        ->with(['que' => function($query) {
                            $query->where('que_status', 'Serving');
                        }])
                        ->where('status', '=', 'Verified')
                        ->with("user_type", "designation")
                        // ->with(['designation' => function($desig) {
                        //     $desig->where('id', 'name');
                        // }])
                        ->groupBy('id', 'designation_id')
                        ->get();
        return $assesorUser;
    }
    
}
