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
Route::post('/loginAuth', [AuthenticationController::class, 'authenticate'])->name('login.post');
Route::get('/register', [AuthenticationController::class, 'register'])->name('auth.register');
Route::post('/storeUser', [AuthenticationController::class, 'storeUser']);
Route::get('/forgotpassword', [AuthenticationController::class, 'forgotPassword'])->name('auth.forgotpassword');
Route::get('/logout', [AuthenticationController::class, 'logout'])->name('logout');

//For validation
Route::post('/storeUserValidate', [AuthenticationController::class, 'storeUserValidate']);

//Main
Route::get('/{pathMatch}', function () {
    return view('home');
})->where('pathMatch',".*");

Route::get('/dashboard', [AdminDashboardController::class, 'dashboard'])->name('AdminDash');