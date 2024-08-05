<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;


Route::middleware('guest')->group(function () {
    Route::get('/', function () {
        return view('auth.onboarding.onscreen-1');
    })->name('on-screen-1');
    Route::get('/on-screen-2', function () {
        return view('auth.onboarding.onscreen-2');
    })->name('on-screen-2');
    Route::get('/on-screen-3', function () {
        return view('auth.onboarding.onscreen-3');
    })->name('on-screen-3');
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
