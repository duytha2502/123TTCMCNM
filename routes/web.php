<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginFbController;
use App\Http\Controllers\HomeController;
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
    return view('login');
});

Route::get('/login/facebook', [LoginFbController::class, 'redirectToFacebook'])->name('login.facebook');
Route::get('/login/facebook/callback', [LoginFbController::class, 'handleFacebookCallback']);
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/logout', [LoginFbController::class, 'logoutFacebook'])->name('logout');
