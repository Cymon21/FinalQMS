<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ManageUserController;
use App\Http\Controllers\Admin\ManageUserTypeController;
use App\Http\Controllers\Admin\LogsController;


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

Route::group(['middleware' => 'admincheck'], function () {
});
//Admin Manage User
    Route::get('/user/display', [ManageUserController::class, 'show']);
    Route::get('/usertype', [ManageUserController::class, 'usertypeBasis']);
    Route::get('/designation', [ManageUserController::class, 'designationFilter']);
    Route::post('/user/create', [ManageUserController::class, 'store']);
    Route::delete('/user/delete/{id}', [ManageUserController::class, 'destroy']);
    Route::put('/user/put/{id}', [ManageUserController::class, 'verify']);
    Route::put('/user/edit/put/{id}', [ManageUserController::class, 'update']);

//Admin Manage User Type
    Route::get('/userType/display', [ManageUserTypeController::class, 'showUserType']);
    Route::get('/designation/display', [ManageUserTypeController::class, 'showDesignation']);
    Route::get('/usertype/add/display', [ManageUserTypeController::class,'displayUserType']);
    Route::delete('/userType/type/delete/{id}', [ManageUserTypeController::class, 'destroyUsertype']);
    Route::delete('/designation/assign/delete/{id}', [ManageUserTypeController::class, 'destroyDesignation']);
    Route::post('/usertype/create', [ManageUserTypeController::class,'storeUserType']);
    Route::post('/designation/create', [ManageUserTypeController::class,'storeDesignation']);

//Admin Logs
    Route::get('/user/displaylogs', [LogsController::class, 'showUser']);
    Route::get('/userType/displaylogs', [LogsController::class, 'showUserType']);
    Route::get('/designation/displaylogs', [LogsController::class, 'showDesignation']);


