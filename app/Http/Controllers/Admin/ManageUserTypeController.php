<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Designation;
use App\Models\Designation_List;
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
    public function storeUserType(Request $request)
    {   $data = $request->all();
        $response = UserType::create($data);
        return response()->json([
            'status' => 'success',
            'data' => $response,
        ], 200);
    }
    public function storeDesignation(Request $request){
        $data = $request->all();
        $response = Designation::create($data)->with('user_type')->get();
        return response()->json([
            'status' => 'success',
            'data' => $response,
        ], 200);
    }

    /**
     * Display the specified resource.
     */
    public function showUserType()
    {
        $userTypes = UserType::all()->map(function ($userType){
            $userType->created_at_formated = date("Y-m-d H:i:s A", strtotime($userType->created_at));
            $userType->updated_at_formated = date("Y-m-d H:i:s A", strtotime($userType->updated_at));
            return $userType;
        });
        return response()->json($userTypes);
    }
    public function showDesignation()
    {
        $designations = Designation::with('user_type')->get()->map(function ($designation) {
            $designation->created_at_formated = date("Y-m-d H:i:s A", strtotime($designation->created_at));
            $designation->updated_at_formated = date("Y-m-d H:i:s A", strtotime($designation->updated_at));
            return $designation;
        });

        return response()->json($designations);
    }
    public function displayUserType(){
        return UserType::all();
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
    public function destroyUsertype($id)
    {
        $userType = UserType::findOrFail($id);
        $userType->delete();
        return response()->json([
            'status' => 'success',
            'message' => 'User deleted successfully',
        ], 200); 
    }
    public function destroyDesignation($id)
    {
        $designation = Designation::findOrFail($id);
        $designation->delete();
        return response()->json([
            'status' => 'success',
            'message' => 'User deleted successfully',
        ], 200); 
    }
}
