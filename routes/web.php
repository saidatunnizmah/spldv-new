<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\KuisController;
use App\Http\Controllers\MateriController;
use App\Http\Controllers\PusherAuthController;
use App\Http\Controllers\DashboardGuruController;
use App\Http\Controllers\DashboardSiswaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::view('/', "landingpage")->name('landingPage');
Route::view('/landing-perihal', 'perihal')->name('landingPage.perihal');

Route::controller(AuthController::class)->group(function () {
    Route::get('/login', "index")->name('login');
    Route::post('/login', "authenticate")->name('login.authenticate');
    Route::get('/register', "register")->name('register');
    Route::post('/register', 'store')->name('register.store');
    Route::get('/logout', 'logout')->name('logout');
});

Route::group(['middleware' => 'auth'], function () {
    Route::group(['middleware' => 'is_guru'], function () {
        Route::controller(DashboardGuruController::class)->group(function () {
            Route::get('/guru/dashboard', 'index')->name('guru.dashboard');

            Route::get('/guru/data-siswa', 'dataSiswa')->name('guru.dataSiswa');
            Route::get('/guru/data/{id}', 'getDataSiswa');
            Route::put('/guru/data-siswa/{id}', 'editDataSiswa')->name('guru.dataSiswa.put');
            Route::delete('/guru/data-siswa/{id}', 'deleteDataSiswa')->name('guru.dataSiswa.delete');

            Route::get('/guru/data-nilai', 'dataNilai')->name('guru.dataNilai');
            Route::get('/guru/data/nilai/{id}', 'getDataNilai');
        });
    });

    Route::group(['middleware' => 'is_siswa'], function () {
        Route::get('/dashboard', [DashboardSiswaController::class, "index"])->name('siswa.dashboard');
        Route::get('/progress', [DashboardSiswaController::class, "progress"])->name('siswa.progress');
        Route::get('/perihal', [DashboardSiswaController::class, "perihal"])->name('siswa.perihal');

        Route::controller(MateriController::class)->group(function () {
            Route::get('/materi/{bab}/{page}',  'index')->name('siswa.materi');
            Route::post('/materi/update-progress', 'updateProgress');
        });

        Route::controller(KuisController::class)->group(function () {
            Route::get('/kuis/{jenis}', 'index')->name('siswa.kuis');
            Route::get('/get-soal', 'getSoal');
            Route::post('/kuis/submit', 'checkAnswer');
            Route::get('hasil-kuis/{id}', 'hasilKuis');
        });

        Route::controller(ChatController::class)->group(function () {
            Route::post('/send-chat', 'sendChat');
            Route::get('/get-chat', 'getDataChat');
        });
    });

    Route::controller(PusherAuthController::class)->group(function () {
        Route::post('/pusher/auth', 'authenticate')->name('pusher.authenticate');
    });
});
