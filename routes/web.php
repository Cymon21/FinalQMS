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

//Admin Main
Route::get('/admin/dashboard', [AdminDashboardController::class, 'dashboard'])->name('AdminDash');

// User Main

Route::get('/guard/dashboard', [GuardController::class, 'index'])->name('guard.dashboard');
Route::get('/cashier/dashboard', [CashierController::class, 'index'])->name('cashier.dashboard');
Route::get('/assesor/dashboard', [AssesorController::class, 'index'])->name('assesor.dashboard');
Route::get('/queuedisplay/dashboard', [QueueDisplayController::class, 'index'])->name('queuedisplay.dashboard');


//Restricted Routes
    Route::get('/admin/{path}', [RestrictedRoutesController::class, 'indexAdmin'])->where('any', '^(?!js/).*')->where('path', '([A-z\d\-/_.]+)?');
    Route::get('/cashier/{path}', [RestrictedRoutesController::class, 'indexCashier'])->where('any', '^(?!js/).*')->where('path', '([A-z\d\-/_.]+)?');
    Route::get('/guard/{path}', [RestrictedRoutesController::class, 'indexGuard'])->where('any', '^(?!js/).*')->where('path', '([A-z\d\-/_.]+)?');
    Route::get('/assesor/{path}', [RestrictedRoutesController::class, 'indexAssesor'])->where('any', '^(?!js/).*')->where('path', '([A-z\d\-/_.]+)?');
    Route::get('/queuedisplay/{path}', [RestrictedRoutesController::class, 'indexQueDisplay'])->where('any', '^(?!js/).*')->where('path', '([A-z\d\-/_.]+)?');

