<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegrisController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\PertandinganController;
use App\Http\Controllers\LanggananController;
use App\Models\Pemesanan;
use App\Http\Controllers\PembayaranController;
use App\Models\Pembayaran;
use App\Models\Pertandingan;

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

// INI JADI 1 TRANSAKSI
Route::get('/pemesanan',[TransaksiController::class, 'index']);
Route::get('/live',[TransaksiController::class, 'cuy']);
Route::get('/tambapemesanan', [TransaksiController::class, 'create']);
Route::post('/tambapemesanan', [TransaksiController::class, 'store']);
Route::delete('/event/delete', [EventController::class, 'destroy']);
Route::get('/tampildatapemesanan/{id}/edit', [TransaksiController::class, 'edit']);
Route::put('/tampildatapemesanan/{id}', [TransaksiController::class, 'update']);
Route::get('/pembayaran',[PembayaranController::class, 'index']);
Route::get('/pembayaran',[PembayaranController::class, 'prosesPembayaran']);
Route::get('/live',[PembayaranController::class, 'cuy']);
Route::get('/tambapembayaran', [PembayaranController::class, 'create']);
Route::post('/tambapembayaran', [PembayaranController::class, 'store']);
Route::delete('/event/delete', [EventController::class, 'destroy']);
Route::get('/tampildatapembayaran/{id}/edit', [PembayaranController::class, 'edit']);
Route::put('/tampildatapembayaran/{id}', [PembayaranController::class, 'update']);

Route::get('/langganan',[LanggananController::class, 'index']);
Route::get('/tambalangganan', [LanggananController::class, 'create']);
Route::post('/tambalangganan', [LanggananController::class, 'store']);
Route::delete('/event/delete', [EventController::class, 'destroy']);
Route::get('/tampildatalangganan/{id}/edit', [LanggananController::class, 'edit']);
Route::put('/tampildatalangganan/{id}', [LanggananController::class, 'update']);

Route::get('regris', [RegrisController::class, 'create'])->name('regris');
Route::post('regris', [RegrisController::class, 'store'])->name('regris');

Route::get('/login', [LoginController::class, 'create'])->name('login');
Route::post('/login', [LoginController::class, 'store']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/jadwal',[PertandinganController::class, 'index']);
Route::get('/live',[PertandinganController::class, 'cuy']);
Route::get('/tambapertandingan', [PertandinganController::class, 'create']);
Route::post('/tambapertandingan', [PertandinganController::class, 'store']);
Route::delete('/event/delete', [EventController::class, 'destroy']);
Route::get('/tampildatapertandingan/{id}/edit', [PertandinganController::class, 'edit']);
Route::put('/tampildatapertandingan/{id}', [PertandinganController::class, 'update']);
