<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ManageUserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Admin Manage User
Route::get('user/display', [ManageUserController::class, 'show']);
Route::get('/usertype', [ManageUserController::class, 'usertypeBasis']);
Route::get('/designation', [ManageUserController::class, 'designationFilter']);
Route::post('/user/create', [ManageUserController::class, 'store']);

