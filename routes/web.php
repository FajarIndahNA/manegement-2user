<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;


Route::get('/', function () {
    return view('layouts.app');
});

Auth::routes();

// // Jika pengguna adalah super_admin, masuk ke /home
// Route::get('/home', [HomeController::class, 'index'])
//     ->middleware('level:super_admin')
//     ->name('home');

// // Jika pengguna adalah admin, arahkan ke /admin
// Route::get('/admin', [HomeController::class, 'admin'])
//     ->middleware('level:admin')
//     ->name('admin');

// Route::group(['middleware' => 'level:super_admin'], function(){
//     Route::get('/home', [HomeController::class, 'index'])->name('home');
// });

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/user/data', [UserController::class, 'data'])->name('user.data');
Route::resource('/user', UserController::class);

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route main Dashboard
Route::get('main_dashboard', function () {
    return view ('monitoring');
})->name('monitoring');

