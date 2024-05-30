<?php

namespace App\Http\Controllers\Assesor;

use App\Http\Controllers\Controller;
use App\Models\QueueNumModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class AssesorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        return view("AssesorView.mainassesor");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function showAssesorQue()
    {
        $queue = QueueNumModel::where("usertype_id", "=", 2)
                                ->where('que_status', '=', 'Uncatered')
                                ->get();

        return response()->json($queue, 200);
    }


    public function getAssesorQue(){
        $queServing = Cache::increment('currServing'.date('Y-m-d'));

        $curServe = Cache::get('currServing'.date('Y-m-d'));

        $getQue = QueueNumModel::select('queue_name_number', 'que_status')
                                ->where('queue_name_number', '=', $curServe)
                                ->where('usertype_id', '=', 2)
                                ->update(['que_status' => 'Serving']);

        $serveQue = QueueNumModel::select('queue_name_number', 'que_status')
                                ->where('queue_name_number', '<=', $curServe)
                                ->where('usertype_id', '=', 2)
                                ->first();


        return response()->json($curServe, 200);
    }

    public function endedQue($id){

        $currQue = QueueNumModel::select('queue_name_number', 'usertype_id')
                                    ->where('queue_name_number', '=', $id)
                                    ->where('usertype_id', '=', 2)
                                    ->update(['que_status' => 'Ended']);

        return response()->json($currQue, 200); 
    }

    
    public function finishAssesorQue(){
        $queServeving = Cache::get('currServing'.date('Y-m-d'), 0);

        $endQue = QueueNumModel::select('queue_name_number', 'usertype_id')
                    ->where('queue_name_number', '>', $queServeving)
                    ->where("usertype_id", "=", 2)
                    ->where('que_status', '=', 'Uncatered')
                    ->get();

        return response()->json($endQue, 200);
    }


}
