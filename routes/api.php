<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\Admin\ManageUserController;
// use App\Http\Controllers\Admin\ManageUserTypeController;
// use App\Http\Controllers\Admin\LogsController;
// use App\Http\Controllers\Guard\GuardController;
// use App\Http\Controllers\Cashier\CashierController;
// use App\Http\Controllers\Assesor\AssesorController;
// use App\Http\Controllers\QueueDisplay\QueueDisplayController;


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




// Route::get('/test-auth',function(){

// });

//Admin Manage User
    // Route::get('/user/display', [ManageUserController::class, 'show']);
    // Route::get('/usertype', [ManageUserController::class, 'usertypeBasis']);
    // Route::get('/designation', [ManageUserController::class, 'designationFilter']);
    // Route::post('/user/create', [ManageUserController::class, 'store']);
    // Route::delete('/user/delete/{id}', [ManageUserController::class, 'destroy']);
    // Route::put('/user/put/{id}', [ManageUserController::class, 'verify']);
    // Route::put('/user/edit/put/{id}', [ManageUserController::class, 'update']);

//Admin Manage User Type
    // Route::get('/usertype/display', [ManageUserTypeController::class, 'showUserType']);
    // Route::get('/designation/display', [ManageUserTypeController::class, 'showDesignation']);
    // Route::get('/usertype/add/display', [ManageUserTypeController::class,'displayUserType']);
    // Route::delete('/userType/type/delete/{id}', [ManageUserTypeController::class, 'destroyUsertype']);
    // Route::delete('/designation/assign/delete/{id}', [ManageUserTypeController::class, 'destroyDesignation']);
    // Route::post('/usertype/create', [ManageUserTypeController::class,'storeUserType']);
    // Route::post('/designation/create', [ManageUserTypeController::class,'storeDesignation']);

//Admin Logs
    // Route::get('/user/displaylogs', [LogsController::class, 'showUser']);
    // Route::get('/userType/displaylogs', [LogsController::class, 'showUserType']);
    // Route::get('/designation/displaylogs', [LogsController::class, 'showDesignation']);


// Guard
    // Route::get('/guard/get/usertype', [GuardController::class, 'getUsersID']);
    // Route::get('/guard/generate/number/{id}', [GuardController::class, 'generateQueNum']);
    // Route::post('/guard/add/number/{id}', [GuardController::class,'printQueue']);
//Cashier
    // Route::get('/cashier/get/queueNum', [CashierController::class, 'showQuePending']);
    // Route::get('/cashier/serve/queueNum/{id}', [CashierController::class, 'servingQue']);
    // Route::get('/cashier/get/serve/queueNum', [CashierController::class, 'getQue']);
    // Route::put('/cashier/update/serve/end/{id}', [CashierController::class, 'endedQue']);
//Assesor
    // Route::get('/assesor/display/que', [AssesorController::class, 'showAssesorQue']);
    // Route::get('/assesor/get/queNum/{id}', [AssesorController::class, 'getAssesorQue']);
    // Route::get('/assesor/end/queNum', [AssesorController::class, 'finishAssesorQue']);
    // Route::put('/assesor/update/serve/end/{id}', [AssesorController::class, 'endedQue']);
// Queu Display
    // Route::get('/cashier/queuDisplay', [QueueDisplayController::class,'displayCashierQue']);
    // Route::get('/assesor/queuDisplay', [QueueDisplayController::class,'displayAssesorQue']);

