<?php

use App\Http\Controllers\AntrianController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\VideoController;
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
        Route::get('/change-password', [ProfileController::class, 'profileAdmin'])->name('change-password');
        Route::post('/update-password', [ProfileController::class, 'updatePassword'])->name('update-password');
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

        Route::group(['prefix' => 'admin/'], function () {
            Route::get('/chat', [ChatController::class, 'indexAdmin'])->name('chat');
            Route::get('/fetch-admin', [ChatController::class, 'fetchMessages'])->name('fetch.to-user');
            Route::post('/mark-seen/{receiverId}', [ChatController::class, 'markMessagesAsSeen'])->name('mark.seen');
            Route::post('/send-message', [ChatController::class, 'sendMessage'])->name('send.to-user');


        });
        Route::group(['prefix' => 'antrian'], function () {
            Route::get('/no-antrian', [AntrianController::class, 'index'])->name('no-antrian');
            Route::get('/add-no-antrian', [AntrianController::class, 'create'])->name('add-no-antrian');
            Route::get('/edit-no-antrian/{id}', [AntrianController::class, 'edit'])->name('edit-no-antrian');

            // Post Update Delete
            Route::post('/post-no-antrian', [AntrianController::class, 'store'])->name('post-no-antrian');
            Route::post('/update-no-antrian/{id}', [AntrianController::class, 'update'])->name('update-no-antrian');
            Route::post('/delete-no-antrian/{id}', [AntrianController::class, 'destroy'])->name('delete-no-antrian');

        });

        Route::group(['prefix' => 'artikel'], function () {
            Route::get('/artikel', [ArtikelController::class, 'index'])->name('artikel');
            Route::get('/add-artikel', [ArtikelController::class, 'create'])->name('add-artikel');
            Route::get('/edit-artikel/{id}', [ArtikelController::class, 'edit'])->name('edit-artikel');

            // Post
            Route::post('/post-artikel', [ArtikelController::class, 'store'])->name('post-artikel');
            Route::post('/update-artikel/{id}', [ArtikelController::class, 'update'])->name('update-artikel');
            Route::post('/delete-artikel/{id}', [ArtikelController::class, 'destroy'])->name('delete-artikel');
        });
        Route::group(['prefix' => 'jadwal'], function () {
            Route::get('/jadwal-dokter', [JadwalController::class, 'index'])->name('jadwal-dokter');
            Route::get('/add-jadwal-dokter', [JadwalController::class, 'create'])->name('add-jadwal-dokter');
            Route::get('/edit-jadwal-dokter/{id}', [JadwalController::class, 'edit'])->name('edit-jadwal-dokter');

            // Post
            Route::post('/post-jadwal', [JadwalController::class, 'store'])->name('post-jadwal');
            Route::post('/update-jadwal/{id}', [JadwalController::class, 'update'])->name('update-jadwal');
            Route::post('/delete-jadwal/{id}', [JadwalController::class, 'destroy'])->name('delete-jadwal');

        });

        Route::group(['prefix' => 'video'], function () {
            Route::get('/video', [VideoController::class, 'index'])->name('tutorial-video');
            Route::get('/add-video', [VideoController::class, 'create'])->name('add-video');
            Route::get('/edit-video/{id}', [VideoController::class, 'edit'])->name('edit-video');

            // Post
            Route::post('/post-video', [VideoController::class, 'store'])->name('post-video');
            Route::post('/update-video/{id}', [VideoController::class, 'update'])->name('update-video');
            Route::post('/delete-video/{id}', [VideoController::class, 'destroy'])->name('delete-video');
        });

        Route::group(['prefix' => 'monitoring'], function () {
            Route::get('/monitoring-antrian', [AntrianController::class, 'monitoring'])->name('monitoring-antrian');

        });

        Route::group(['prefix' => 'test'], function () {
            Route::get('/test-manual', [TestController::class, 'testManual'])->name('test-manual');

        });
    });

    Route::group(['middleware' => 'roleCheck:user'], function () {
        Route::get('/home', [HomeController::class, 'index'])->name('home');

        Route::get('/berita', [HomeController::class, 'berita'])->name('berita');

        Route::get('/detail-berita/{id}', [HomeController::class, 'detail'])->name('detail-berita');
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
        Route::get('/soal-13/{test}', [TestController::class, 'soal_13'])->name('soal-13');

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

        // Chat
        Route::group(['prefix' => 'user'], function () {
            Route::get('/chat', [ChatController::class, 'index'])->name('chat-admin');
            Route::get('/fetch-message', [ChatController::class, 'fetchMessagesFromUserToAdmin'])->name('fetch.to-admin');
            Route::post('/send-message', [ChatController::class, 'sendMessageFromUserToAdmin'])->name('send.to-admin');
        });
        // Chat
    });
});

Route::get('/logout', [AuthController::class, 'destroy'])->name('logout');
