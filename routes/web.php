<?php

use App\Http\Controllers\Admin\DiagnosaController;
use App\Http\Controllers\Admin\GejalaController;
use App\Http\Controllers\Admin\PenyakitController;
use App\Http\Controllers\Admin\RelasiController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\auth\GoogleController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Diagnosa\HasilDiagnosa;
use App\Http\Controllers\Diagnosa\MulaiDiagnosaController;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::controller(MulaiDiagnosaController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('mulai_diagnosa', 'mulai');
    Route::post('/start-diagnosa', 'start')->name('diagnosa.start');
});

Route::controller(HasilDiagnosa::class)->group(function () {
    Route::get('download/hasil', 'downloadPDF')->name('downloadpdf');
});

Route::group(['middleware' => 'web'], function () {
    Route::controller(AuthController::class)->group(function () {
        Route::get('login', 'index')->name('login');
        Route::post('post-login', 'postLogin')->name('login.post');
        Route::get('logout', 'logout')->name('logout');
    });

    Route::controller(GoogleController::class)->group(function () {
        Route::get('/auth/redirect', 'redirectToGoogle');
        Route::get('/auth/google/callback', 'handleGoogleCallback');
    });

    Route::middleware('auth')->group(function () {
        Route::controller(DashboardController::class)->group(function () {
            Route::get('dashboard', 'index')->name('dashboard');
        });

        Route::controller(PenyakitController::class)->group(function () {
            Route::get('penyakit', 'index')->name('penyakit.index');
            Route::post('store/penyakit', 'store')->name('store.penyakit');
            Route::post('update/penyakit/{id}', 'update')->name('update.penyakit');
            Route::delete('destroy/penyakit/{id}', 'destroy');
        });

        Route::controller(GejalaController::class)->group(function () {
            Route::get('gejala', 'index')->name('gejala.index');
            Route::post('gejala/store', 'storeGejala');
            Route::post('gejala/update{id}', 'updateG')->name('update.gejala');
            Route::delete('destroy/gejala/{id}', 'destroyG');
        });

        Route::controller(RelasiController::class)->group(function () {
            Route::get('relasi', 'index')->name('relasi.index');
            Route::post('relasi/store', 'storeRelasi');
            Route::post('relasi/update/{id}', 'updateRelasi')->name('relasi.update');
            Route::delete('destroy/relasi/{id}', 'destroyR');
        });

        Route::controller(DiagnosaController::class)->group(function () {
            Route::get('diagnosa', 'index')->name('diagnosa.index');
            Route::get('/export-diagnosa', 'exportToExcel')->name('export.diagnosa');
            Route::get('/export-pdf', 'exportToPdf')->name('export.pdf');
            Route::get('/print/diagnosis', 'printDiagnosis')->name('print.diagnosis');
            Route::delete('destroy/diagnosa/{id}', 'destroy');
        });
    });
});
