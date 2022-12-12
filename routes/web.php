<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KelurahanController;
use App\Http\Controllers\MasyarakatController;
use App\Http\Controllers\UserController;

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


Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'authLogin']);
Route::get('/logout', [AuthController::class, 'logout'])->middleware('auth');

// route prefix masyarakat
Route::prefix('/masyarakat')->group(function () {
    // Route::get('/dashboard-mb', [UserController::class, 'index']);
    Route::get('/riwayat-m', [UserController::class, 'show'])->middleware('auth');
    Route::get('/dashboard-mb', [UserController::class, 'create'])->middleware('auth');
    Route::post('/riwayat-m', [UserController::class, 'store'])->middleware('auth');
});

// Route Prefix Kelurahan 
Route::prefix('/kelurahan')->group(function () {
    // Route::get('/dashboard-k', [KelurahanController::class, 'show']);
    Route::get('/riwayat-k', [KelurahanController::class, 'show'])->middleware('auth');
    Route::get('/dashboard-k', [KelurahanController::class, 'create'])->middleware('auth');
    Route::get('/profile', [KelurahanController::class, 'profile'])->middleware('auth');
    // Route::post('/riwayat-k', [UserController::class, 'store']);
    // Route to export excel
    Route::get('/export-excel', [KelurahanController::class, 'exportExcel'])->name('export.excel');
    
});
