<?php

namespace App\Http\Controllers\Guard;

use App\Http\Controllers\Controller;
use App\Models\QueueNumModel;
use App\Models\UserType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class GuardController extends Controller
{
    public function index(){
        return view('GuardView.mainguard');
    }

    public function getUsersID(){
        $user_type = UserType::whereNotIn('name', ['Queue Display', 'Guard'])->get();
        return $user_type;
    }
    public function generateQueNum($id){
        $queue =  Cache::increment('generatedNum'.$id.date('Y-m-d'));
        return response()->json($queue, 200);
    }

    public function printQueue($id){
        $queue =  Cache::get('generatedNum'.$id.date('Y-m-d'));
        QueueNumModel::create([
            'queue_name_number'=> $queue,
            'usertype_id'=> $id,
        ]);
        return response()->json($queue, 200);
    }
}
