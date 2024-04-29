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
        $queue = QueueNumModel::where("usertype_id", "<>", 1)->get();
        return response()->json($queue, 200);
    }


    public function getAssesorQue(){
        $queServeving = Cache::increment('currServing'.date('Y-m-d'));
        return response()->json($queServeving, 200);
    }
    public function finishAssesorQue(){
        $queServeving = Cache::get('currServing'.date('Y-m-d'), 0);
        $endQue = QueueNumModel::select('queue_name_number')
                    ->where('queue_name_number', '>', $queServeving)
                    ->where('usertype_id', '=', 2)
                    ->get();
        return response()->json($endQue, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
