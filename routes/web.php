<?php

use Illuminate\Support\Facades\Route;

//Auth Section
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\Admin\AdminDashboardController;

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
Route::post('/login', [AuthenticationController::class, 'authenticate']);
Route::get('/register', [AuthenticationController::class, 'register'])->name('auth.register');
Route::post('/storeUser', [AuthenticationController::class, 'storeUser']);
Route::get('/forgotpassword', [AuthenticationController::class, 'forgotPassword'])->name('auth.forgotpassword');

//for validation
Route::post('/storeUserValidate', [AuthenticationController::class, 'storeUserValidate']);

//Main
Route::get('/Admin/dashboard', [AdminDashboardController::class, 'dashboard']);