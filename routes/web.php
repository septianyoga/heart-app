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

        Route::get('/berita', function () {
            return view('user.berita');
        })->name('berita');

        Route::get('/detail-berita', function () {
            return view('user.detail-berita');
        })->name('detail-berita');
        // Home Page & Berita & Detail Berita

        // Test Page & Test Result
        Route::get('/test-page', function () {
            return view('user.test-page');
        })->name('test-page');

        Route::get('/test-page-result', function () {
            return view('user.test-page-result');
        })->name('test-page-result');
        // Test Page & Test Result

        // Soal
        Route::get('/soal-1', function () {
            return view('user.test.soal-1');
        })->name('soal-1');

        Route::get('/soal-2', function () {
            return view('user.test.soal-2');
        })->name('soal-2');

        Route::get('/soal-3', function () {
            return view('user.test.soal-3');
        })->name('soal-3');

        Route::get('/soal-4', function () {
            return view('user.test.soal-4');
        })->name('soal-4');

        Route::get('/soal-5', function () {
            return view('user.test.soal-5');
        })->name('soal-5');

        Route::get('/soal-6', function () {
            return view('user.test.soal-6');
        })->name('soal-6');

        Route::get('/soal-7', function () {
            return view('user.test.soal-7');
        })->name('soal-7');

        Route::get('/soal-8', function () {
            return view('user.test.soal-8');
        })->name('soal-8');

        Route::get('/soal-9', function () {
            return view('user.test.soal-9');
        })->name('soal-9');

        Route::get('/soal-10', function () {
            return view('user.test.soal-10');
        })->name('soal-10');

        Route::get('/soal-11', function () {
            return view('user.test.soal-11');
        })->name('soal-11');

        Route::get('/soal-12', function () {
            return view('user.test.soal-12');
        })->name('soal-12');
        // Soal

        // Antrian
        Route::get('/antrian', function () {
            return view('user.antrian');
        })->name('antrian');
        // Antrian

        // Riwayat
        Route::get('/riwayat', function () {
            return view('user.riwayat');
        })->name('riwayat');
        Route::get('/test-detail', function () {
            return view('user.test-detail');
        })->name('test-detail');
        // Riwayat

        // Profile
        Route::get('/profile', function () {
            return view('user.profile');
        })->name('profile');
        // Profile
    });
});

Route::get('/logout', [AuthController::class, 'destroy'])->name('logout');


