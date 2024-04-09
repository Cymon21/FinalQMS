<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\RegisterStoreRequest;

class AuthenticationController extends Controller
{
    public function _construct(){

    }

    public function login(){
        return view('auth.login');
    }

    public function register(){
        return view('auth.register');
    }

    public function storeUser(RegisterStoreRequest $request){

        $request['password'] = bcrypt($request['password']);
        $data = $request->all();
        $response = User::create($data);
        if ($response) { 
            // User creation was successful
            return response()->json([
                'status' => 'success',
                'redirect' => '/login',
            ], 200);
        } else {
            // User creation failed
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to create user.',
            ], 500);
        }
    }

    public function storeUserValidate(RegisterStoreRequest $request){}


    public function forgotPassword(){
        return view('auth.forgotpassword');
    }
}
