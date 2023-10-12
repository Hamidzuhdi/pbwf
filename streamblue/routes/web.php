<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegrisController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LanggananController;

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

Route::get('/pemesanan', function () {
    return view('pemesanan');
});

Route::get('/langganan',[LanggananController::class, 'index']);
Route::get('/tambalangganan', [LanggananController::class, 'create']);
Route::post('/tambalangganan', [LanggananController::class, 'store']);
// Route::delete('/event/delete', [EventController::class, 'destroy']);
// Route::get('/tampildataevent/{id}/edit', [EventController::class, 'edit']);
// Route::put('/tampildataevent/{id}', [EventController::class, 'update']);

Route::get('regris', [RegrisController::class, 'create'])->name('regris');
Route::post('regris', [RegrisController::class, 'store'])->name('regris');

Route::get('/login', [LoginController::class, 'create'])->name('login');
Route::post('/login', [LoginController::class, 'store']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/jadwal', function () {
    return view('jadwal');
});
