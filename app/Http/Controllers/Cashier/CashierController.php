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
        $queNum = QueueNumModel::where("usertype_id", '=', 1)
                                ->where('que_status', '=', 'Uncatered')
                                ->get();
        return $queNum;
    }
    
    
    public function servingQue(){
        $queServing = Cache::increment('serving'.date('Y-m-d'));

        $quecurServe = Cache::get('serving'.date('Y-m-d'), 0);

        $getQue = QueueNumModel::select('queue_name_number', 'que_status')
                    ->where('queue_name_number', '=', $quecurServe)
                    ->where("usertype_id", '=', 1)
                    ->update(['que_status' => 'Serving']);

        $serveQue = QueueNumModel::select('queue_name_number', 'usertype_id')
                            ->where('queue_name_number', '<=', $quecurServe)
                            ->where("usertype_id", '=', 1)
                            ->first();


        return response()->json($quecurServe, 200);
    }

    public function endedQue($id){

        $currQue = QueueNumModel::select('queue_name_number', 'usertype_id')
                                    ->where('queue_name_number', '=', $id)
                                    ->update(['que_status' => 'Ended']);

        return response()->json($currQue, 200); 
    }

    public function getQue(){
        $queServing = Cache::get('serving'.date('Y-m-d'), 0);

        $getQue = QueueNumModel::select('queue_name_number', 'usertype_id')
                    ->where('queue_name_number', '>', $queServing)
                    ->where("usertype_id", '=', 1)
                    ->where('que_status', '=', 'Uncatered')
                    ->get();
                    
        return response()->json($getQue, 200); 
    }

}
