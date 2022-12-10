<?php


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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

// route prefix masyarakat
Route::prefix('/masyarakat')->group(function () {
    // Route::get('/dashboard-mb', [UserController::class, 'index']);
    Route::get('/riwayat-m', [UserController::class, 'show']);
    Route::get('/dashboard-mb', [UserController::class, 'create']);
    Route::post('/riwayat-m', [UserController::class, 'store']);

});