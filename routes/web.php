<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\RestrictedRoutesController;

//Auth Section
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Guard\GuardController;
use App\Http\Controllers\Cashier\CashierController;
use App\Http\Controllers\Assesor\AssesorController;
use App\Http\Controllers\QueueDisplay\QueueDisplayController;
use App\Http\Controllers\Unverified\UnverifiedUsersContoller;

use App\Http\Controllers\Admin\ManageUserController;
use App\Http\Controllers\Admin\ManageUserTypeController;
use App\Http\Controllers\Admin\LogsController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Auth Section
Route::get('/login', [AuthenticationController::class, 'login'])->name('auth.login');
Route::post('/loginAuth', [AuthenticationController::class, 'authenticate'])->name('login.post');
Route::get('/register', [AuthenticationController::class, 'register'])->name('auth.register');
Route::post('/storeUser', [AuthenticationController::class, 'storeUser']);
Route::get('/forgotpassword', [AuthenticationController::class, 'forgotPassword'])->name('auth.forgotpassword');
Route::get('/logout', [AuthenticationController::class, 'logout'])->name('logout');
Route::post('/storeUserValidate', [AuthenticationController::class, 'storeUserValidate']);



Route::middleware('auth')->group(function() {
    //Admin Main
    Route::get('/admin/dashboard', [AdminDashboardController::class, 'dashboard'])->name('AdminDash');
    //Admin Manage User
        Route::get('/user/display', [ManageUserController::class, 'show']);
        Route::get('/usertype', [ManageUserController::class, 'usertypeBasis']);
        Route::get('/designation', [ManageUserController::class, 'designationFilter']);
        Route::post('/user/create', [ManageUserController::class, 'store']);
        Route::delete('/user/delete/{id}', [ManageUserController::class, 'destroy']);
        Route::put('/user/put/{id}', [ManageUserController::class, 'verify']);
        Route::put('/user/edit/put/{id}', [ManageUserController::class, 'update']);

    //Admin Manage User Type
        Route::get('/usertype/display', [ManageUserTypeController::class, 'showUserType']);
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


    // Guard Main
    Route::get('/guard/dashboard', [GuardController::class, 'index'])->name('guard.dashboard');
        Route::get('/guard/get/usertype', [GuardController::class, 'getUsersID']);
        Route::get('/guard/generate/number/{id}', [GuardController::class, 'generateQueNum']);
        Route::post('/guard/add/number/{id}', [GuardController::class,'printQueue']);

    //Cashier page
    Route::get('/cashier/dashboard', [CashierController::class, 'index'])->name('cashier.dashboard');
        Route::get('/cashier/get/queueNum', [CashierController::class, 'showQuePending']);
        Route::get('/cashier/serve/queueNum/{id}', [CashierController::class, 'servingQue']);
        Route::put('/cashier/update/serve/end/{id}', [CashierController::class, 'endedQue']);
        Route::get('/cashier/get/serve/queueNum', [CashierController::class, 'getQue']);


    //Assesor page
    Route::get('/assesor/dashboard', [AssesorController::class, 'index'])->name('assesor.dashboard');
        Route::get('/assesor/display/que', [AssesorController::class, 'showAssesorQue']);
        Route::get('/assesor/get/queNum/{id}', [AssesorController::class, 'getAssesorQue']);
        Route::get('/assesor/end/queNum', [AssesorController::class, 'finishAssesorQue']);
        Route::put('/assesor/update/serve/end/{id}', [AssesorController::class, 'endedQue']);
    
});



//Queue page
Route::get('/queuedisplay/dashboard', [QueueDisplayController::class, 'index'])->name('queuedisplay.dashboard');
Route::get('/cashier/queuDisplay', [QueueDisplayController::class,'displayCashierQue']);
Route::get('/assesor/queuDisplay', [QueueDisplayController::class,'displayAssesorQue']);



 

//Restricted Routes
Route::get('/admin/{path}', [RestrictedRoutesController::class, 'indexAdmin'])->where('any', '^(?!js/).*')->where('path', '([A-z\d\-/_.]+)?');
Route::get('/cashier/{path}', [RestrictedRoutesController::class, 'indexCashier'])->where('any', '^(?!js/).*')->where('path', '([A-z\d\-/_.]+)?');
Route::get('/guard/{path}', [RestrictedRoutesController::class, 'indexGuard'])->where('any', '^(?!js/).*')->where('path', '([A-z\d\-/_.]+)?');
Route::get('/assesor/{path}', [RestrictedRoutesController::class, 'indexAssesor'])->where('any', '^(?!js/).*')->where('path', '([A-z\d\-/_.]+)?');
Route::get('/queuedisplay/{path}', [RestrictedRoutesController::class, 'indexQueDisplay'])->where('any', '^(?!js/).*')->where('path', '([A-z\d\-/_.]+)?');



