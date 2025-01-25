<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/',function(){
    return view('home');
});
Route::middleware('guest')->group(function(){
    Route::get('/login', 'App\Http\Controllers\AuthController@login')->name('login');
    Route::post('/login-store', 'App\Http\Controllers\AuthController@loginStore')->name('loginStore');
    Route::get('/register', 'App\Http\Controllers\AuthController@register')->name('registerForm');
    Route::post('/register-store', 'App\Http\Controllers\AuthController@registerStore')->name('registerStore');
});

Route::get('/dashboard', 'App\Http\Controllers\DashboardController@dashboard')
    ->name('dashboard')
    ->middleware('auth');
Route::get('/user-dashboard','App\Http\Controllers\DashboardController@dashboardUser')
    ->name('user.dashboard')
    ->middleware('isUser');
Route::get('/admin-dashboard','App\Http\Controllers\DashboardController@dashboardAdmin')
    ->name('admin.dashboard')
    ->middleware('isAdmin');
Route::get('/logout','App\Http\Controllers\DashboardController@logout')
    ->name('logout')
    ->middleware('auth');
