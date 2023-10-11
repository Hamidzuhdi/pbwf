<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegrisController;
use App\Http\Controllers\LoginController;

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

Route::get('/', function () {
    return view('rumah');
});

Route::get('/live', function () {
    return view('live');
});

Route::get('regris', [RegrisController::class, 'create'])->name('regris');
Route::post('regris', [RegrisController::class, 'store'])->name('regris');

Route::get('/login', [LoginController::class, 'create'])->name('login');
Route::post('/login', [LoginController::class, 'store']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/jadwal', function () {
    return view('jadwal');
});
