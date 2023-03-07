<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

use App\Http\Controllers\BappedaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\KelurahanController;
use App\Http\Controllers\MasyarakatController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index']);
Route::get('/profile', [ProfileController::class, 'profile'])->middleware('auth');


Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'authLogin']);
Route::get('/logout', [AuthController::class, 'logout'])->middleware('auth');

// route prefix masyarakat
Route::prefix('/masyarakat')->group(function () {

    Route::get('/riwayat-m', [UserController::class, 'show'])->middleware('auth');
    Route::get('/dashboard-mb', [UserController::class, 'create'])->middleware('auth');
    Route::post('/riwayat-m', [UserController::class, 'store'])->middleware('auth');
    Route::get('/riwayat-m/{id}', [UserController::class, 'edit'])->middleware('auth')->name('edit.data');
    Route::put('/riwayat-m/{id}', [UserController::class, 'update'])->middleware('auth')->name('update.data');
    Route::get('/profile-m', [UserController::class, 'profile'])->middleware('auth');
    Route::put('/edit-akun/{id}', [UserController::class, 'updateAkun'])->middleware('auth')->name('update.akun-m');
});

// Route Prefix Kelurahan 
Route::prefix('/kelurahan')->group(function () {

    Route::get('/dashboard-k', [KelurahanController::class, 'index'])->middleware('auth')->name('kelurahan.dashboard');
    Route::post('/riwayat-k', [KelurahanController::class, 'store'])->middleware('auth')->name('kirim.data');
    Route::get('/riwayat-k', [KelurahanController::class, 'show'])->middleware('auth');
    Route::get('/dashboard-k/{id}', [KelurahanController::class, 'create'])->middleware('auth')->name('submit.data');
    Route::delete('/dashboard-k/{id}', [KelurahanController::class, 'destroy'])->middleware('auth')->name('delete.data');
    Route::get('/export-excel', [KelurahanController::class, 'exportExcel'])->name('export.excel');
    Route::get('/profile-k', [KelurahanController::class, 'profile'])->middleware('auth');
    Route::put('/edit-akun/{id}', [KelurahanController::class, 'updateAkun'])->middleware('auth')->name('update.akun-k');



    Route::prefix('/bappeda')->group(function () {

        Route::get('/dashboard-b', [BappedaController::class, 'index'])->middleware('auth');
        Route::get('/table-bkel', [BappedaController::class, 'showBkel'])->name('table-bkel')->middleware('auth');
        Route::get('/list-akun', [BappedaController::class, 'showAkun'])->middleware('auth');
        Route::get('/add-akun', [BappedaController::class, 'addAkun'])->middleware('auth');
        Route::post('/list-akun', [BappedaController::class, 'storeAkun'])->middleware('auth');
        Route::get('/table-bkat', [BappedaController::class, 'showBkat'])->middleware('auth');
        Route::get('/table-bkel/{id}', [BappedaController::class, 'editAkun'])->middleware('auth')->name('edit.akun');
        Route::put('/table-bkel/{id}', [BappedaController::class, 'updateAkun'])->middleware('auth')->name('update.akun');
        Route::get('/export-excel', [BappedaController::class, 'exportExcel'])->name('Bappeda-export.excel');
        Route::post('/filter', [BappedaController::class, 'filter'])->name('filter');
        
        
    });
});
