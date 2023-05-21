<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::prefix('administrator')->middleware(['auth', 'auth.administrator'])->group(function () {
    // Ini route khusus administrator
});

Route::prefix('operator')->middleware(['auth', 'auth.operator'])->group(function () {
    // Ini route khusus operator
});

Route::prefix('wali')->middleware(['auth', 'auth.wali'])->group(function () {
    // Ini route khusus wali
});

Route::get('logout', function () {
    Auth::logout();
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
