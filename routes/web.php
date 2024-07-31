<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'index'])->name('login');
    Route::post('/login', [AuthController::class, 'authenticate']);
});

Route::get('/register', [AuthController::class, 'create'])->name('register');
Route::post('/register', [AuthController::class, 'store']);


Route::middleware('auth')->group(function () {

    Route::group(['middleware' => 'roleCheck:admin'], function () {
        Route::get('/dashboard', function () {
            return view('admin.dashboard');
        })->name('dashboard');
    });

    Route::group(['middleware' => 'roleCheck:user'], function () {
        Route::get('/home', function () {
            return view('user.home');
        })->name('home');
    });
});

Route::get('/logout', [AuthController::class, 'destroy'])->name('logout');
