<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\DesignationResource;
use App\Http\Resources\UserTypeResource;
use App\Models\Designation;
use App\Models\UserType;
use Illuminate\Http\Request;
use App\Models\User;

class ManageUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $selected_class =  $request->selectedClass;
        // User::create([
        //     'usertype_id' => $selected_class
        // ]);
        $data = $request->all();
        $response = User::create($data);
        return response()->json([
            'status' => 'success',
            'data' => $response,
        ], 200);
    }

    public function usertypeBasis(){
        $usertypes = UserType::all();
        return UserTypeResource::collection($usertypes);
    }

    public function designationFilter(){
        $designation_id = request('usertype_id');
        $designation = Designation::where('usertype_id', $designation_id)->get();
        return DesignationResource::collection($designation);
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        return User::all();
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
