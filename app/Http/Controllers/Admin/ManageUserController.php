<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\DesignationResource;
use App\Http\Resources\UserTypeResource;
use App\Models\Designation;
use App\Models\UserType;
use Illuminate\Http\Request;
use App\Models\User;
use App\Mail\UserEmail;
use Mail;

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
        $request['password'] = bcrypt($request['password']);
        $request['status'] = 'Verified';
        $data = $request->all();
        $response = User::create($data);
        return response()->json([
            'status' => 'success',
            'data' => $response,
        ], 200);
    }

    public function usertypeBasis()
    {
        $usertypes = UserType::all();
        return UserTypeResource::collection($usertypes);
    }

    public function designationFilter()
    {
        $designation_id = request('usertype_id');
        $designation = Designation::where('usertype_id', $designation_id)->get();
        return DesignationResource::collection($designation);
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        return User::with('user_type', 'designation')->get();
    }

    public function verify(Request $request, $id){
        $user = User::findOrFail($id);
       
        $request['status'] = 'Verified';
        $user->update($request->all());

        $user_data = User::with('user_type', 'designation')->where('id', $user->id)->first();

        // Prepare email data
        $mailData = [
            'Title' => 'Account Verified',
            'name' => $user_data->name,
            'email' => $user_data->email,
            'job' => $user_data->user_type->name,
            'designation' => $user_data->designation->name,
            'body' => 'Your account has been verified, please access the link below to login',
            'link' => 'http://127.0.0.1:8000/login'
        ];

        // Send email using Mail facade
        $result = Mail::to($user->email)->send(new UserEmail($mailData));

        // Check if email was sent successfully
        if ($result) {
            return response()->json([
                'status' => 'success',
                'message' => 'User verified and email sent successfully',
                'data' => $user,
            ], 200);
        } else {
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to send email',
            ], 500);
        }
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
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return response()->json([
            'status' => 'success',
            'message' => 'User deleted successfully',
        ], 200);
    }
}
