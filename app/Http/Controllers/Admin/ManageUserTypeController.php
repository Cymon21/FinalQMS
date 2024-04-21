<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Designation;
use App\Models\UserType;
use Illuminate\Http\Request;

class ManageUserTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       return view("home");
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
    public function showUserType()
    {
        $userTypes = UserType::all()->map(function ($userType){
            $userType->created_at_formated = date("Y-m-d H:i:s", strtotime($userType->created_at));
            $userType->updated_at_formated = date("Y-m-d H:i:s", strtotime($userType->updated_at));
            return $userType;
        });
        return response()->json($userTypes);
    }
    public function showDesignation()
    {
        $designations = Designation::all()->map(function ($designation){
            $designation->created_at_formated = date("Y-m-d H:i:s", strtotime($designation->created_at));
            $designation->updated_at_formated = date("Y-m-d H:i:s", strtotime($designation->updated_at));
            return $designation;
        });

        return response()->json($designations);
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
