<?php

use App\Http\Controllers\AntrianController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TestController;
use App\Models\Antrian;
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
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

        Route::get('/chat', function () {
            return view('admin.page.chat');
        })->name('chat');

        Route::group(['prefix' => 'antrian'], function () {
            Route::get('/no-antrian', [AntrianController::class, 'index'])->name('no-antrian');
            Route::get('/add-no-antrian', [AntrianController::class, 'create'])->name('add-no-antrian');
            Route::get('/edit-no-antrian/{id}', [AntrianController::class, 'edit'])->name('edit-no-antrian');

            // Post Update Delete
            Route::post('/post-no-antrian', [AntrianController::class, 'store'])->name('post-no-antrian');
            Route::post('/update-no-antrian/{id}', [AntrianController::class, 'update'])->name('update-no-antrian');
            Route::post('/delete-no-antrian/{id}', [AntrianController::class, 'destroy'])->name('delete-no-antrian');

        });

        Route::get('/artikel', function () {

            return view('admin.page.artikel');
        })->name('artikel');

        Route::get('/jadwal-dokter', function () {
            return view('admin.page.jadwal-dokter');
        })->name('jadwal-dokter');

        Route::get('/tutorial-video', [
            function () {
                return view('admin.page.tutorial-video');
            }
        ])->name('tutorial-video');


        Route::group(['prefix' => 'monitoring'], function () {
            Route::get('/monitoring-antrian', [AntrianController::class, 'monitoring'])->name('monitoring-antrian');

        });

        Route::group(['prefix' => 'test'], function () {
            Route::get('/test-manual', [TestController::class, 'testManual'])->name('test-manual');

        });
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
        Route::get('/test-page', [TestController::class, 'index'])->name('test-page');

        // init id start soal
        Route::get('/start', [TestController::class, 'start'])->name('start');

        // Soal
        Route::get('/soal-1/{test}', [TestController::class, 'soal_1'])->name('soal-1');
        Route::get('/soal-2/{test}', [TestController::class, 'soal_2'])->name('soal-2');
        Route::get('/soal-3/{test}', [TestController::class, 'soal_3'])->name('soal-3');
        Route::get('/soal-4/{test}', [TestController::class, 'soal_4'])->name('soal-4');
        Route::get('/soal-5/{test}', [TestController::class, 'soal_5'])->name('soal-5');
        Route::get('/soal-6/{test}', [TestController::class, 'soal_6'])->name('soal-6');
        Route::get('/soal-7/{test}', [TestController::class, 'soal_7'])->name('soal-7');
        Route::get('/soal-8/{test}', [TestController::class, 'soal_8'])->name('soal-8');
        Route::get('/soal-9/{test}', [TestController::class, 'soal_9'])->name('soal-9');
        Route::get('/soal-10/{test}', [TestController::class, 'soal_10'])->name('soal-10');
        Route::get('/soal-11/{test}', [TestController::class, 'soal_11'])->name('soal-11');
        Route::get('/soal-12/{test}', [TestController::class, 'soal_12'])->name('soal-12');

        // Test Page & Test Result
        Route::get('/test-page-result/{test}', [TestController::class, 'result'])->name('test-page-result');

        // Antrian
        Route::get('/antrian', [AntrianController::class, 'antrian'])->name('antrian');
        // Antrian

        // Riwayat
        Route::get('/riwayat', [HistoryController::class, 'index'])->name('riwayat');
        Route::get('/test-detail', function () {
            return view('user.test-detail');
        })->name('test-detail');
        // Riwayat

        // Profile
        Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
        Route::post('/profile', [ProfileController::class, 'store']);
        // Profile
    });
});

Route::get('/logout', [AuthController::class, 'destroy'])->name('logout');
