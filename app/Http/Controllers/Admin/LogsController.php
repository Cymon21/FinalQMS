<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\UserType;
use Illuminate\Http\Request;
use App\Models\Designation;

class LogsController extends Controller
{
    public function index(){
        return view('home');
    }

    public function showUser(){
        return User::where('role', '<>', 'admin')->with('user_type', 'designation')->get()->map(function ($userTime){
            $userTime->created_formated_time = date("Y-m-d H:i:s A", strtotime($userTime->created_at));
            $userTime->updated_formated_time = date("Y-m-d H:i:s A", strtotime($userTime->updated_at));
            return $userTime;
        });
    }

    public function showUserType(){
        return UserType::all()->map(function ($userTypeTime){
            $userTypeTime->created_formated_time = date("Y-m-d H:i:s A", strtotime($userTypeTime->created_at));
            $userTypeTime->updated_formated_time = date("Y-m-d H:i:s A", strtotime($userTypeTime->updated_at));
            return $userTypeTime;
        });
    }

    public function showDesignation(){
        return Designation::with('user_type')->get()->map(function ($designationTime){
            $designationTime->created_formated_time = date('Y-m-d H:i:s A', strtotime($designationTime->created_at));
            $designationTime->updated_formated_time = date('Y-m-d H:i:s A', strtotime($designationTime->updated_at));
            return $designationTime;
        });
    }

}
