<?php

namespace App\Http\Controllers\Cashier;

use App\Http\Controllers\Controller;
use App\Models\QueueNumModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Auth;

class CashierController extends Controller
{

    public function index()
    {
        return view("CashierView.maincashier");
    }


    public function showQuePending()
    {
        $queNum = QueueNumModel::where("usertype_id", "<>", 2)->get();
        return $queNum;
    }
    
    public function servingQue(){
        $queServing = Cache::increment('serving'.date('Y-m-d'));
        return response()->json($queServing, 200);
    }

    public function getQue(){
        $queServing = Cache::get('serving'.date('Y-m-d'), 0);
        $getQue = QueueNumModel::select('queue_name_number')
                    ->where('queue_name_number', '>', $queServing)
                    ->where('usertype_id', '<>', 2)
                    ->get();
        return response()->json($getQue, 200);
    }

}
