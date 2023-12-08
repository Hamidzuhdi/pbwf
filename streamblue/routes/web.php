<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegrisController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PemesananController;
use App\Http\Controllers\PertandinganController;
use App\Http\Controllers\LanggananController;
use App\Models\Pemesanan;
use App\Http\Controllers\PembayaranController;
use App\Models\Pembayaran;
use App\Models\Pertandingan;
use Illuminate\Routing\RouteGroup;

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
Route::get('/jadwal',[PertandinganController::class, 'index']);

Route::get('/regris', [RegrisController::class, 'create']);

Route::post('/regris', [RegrisController::class, 'store']);

Route::get('/login', [LoginController::class, 'create'])->name('login');
Route::post('/login', [LoginController::class, 'store']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Route::get('/live', function () {
//     return view('live');
// });

Route::group(['middleware' => ['auth','CekRolee:customer']], function(){
        // INI JADI 1 TRANSAKSI
    Route::get('/pemesanan',[PemesananController::class, 'index']);
    Route::get('/tambapemesanan', [PemesananController::class, 'create']);
    Route::post('/pemesanan', [PemesananController::class, 'store']);
    Route::delete('/event/delete', [EventController::class, 'destroy']);
    Route::get('/tampildatapemesanan/{id}/edit', [PemesananController::class, 'edit']);
    Route::put('/tampildatapemesanan/{id}', [PemesananController::class, 'update']);

    Route::get('/langganan',[LanggananController::class, 'index']);

    Route::get('/live',[PertandinganController::class, 'cuy']);

    Route::get('/pembayaran',[PembayaranController::class, 'index']);

    // Route::get('/live',[PembayaranController::class, 'cuy']);
    Route::get('/tambapembayaran', [PembayaranController::class, 'create']);
    Route::post('/pembayaran', [PembayaranController::class, 'store']);
    Route::delete('/event/delete', [EventController::class, 'destroy']);
    // sampai sini
});

Route::group(['middleware' => ['auth','CekRolee:superadmin,admin']], function(){
    Route::get('/admin', function () {
        return view('admin/layout/index');
    });

    Route::get('/alangganan',[LanggananController::class, 'aindex']);
    Route::get('/apertandingan',[PertandinganController::class, 'aindex']);
    Route::get('/apemesanan',[PemesananController::class, 'aindex']);


    Route::get('/pembayaran/resetspb/{id}',[PembayaranController::class, 'resetspb']);
    Route::get('/pembayaran/resetspg/{id}',[PembayaranController::class, 'resetspg']);

    Route::get('/apembayaran',[PembayaranController::class, 'aindex']);

    Route::get('/auser', [RegrisController::class, 'index']);
    Route::get('/admin/modal/edituser/{id}/edit', [RegrisController::class, 'edit']);
    Route::put('/admin/modal/edituser/{id}', [RegrisController::class, 'update']);

    Route::get('/admin/modal/addlangganan', [LanggananController::class, 'create']);
    Route::post('/admin/modal/addlangganan', [LanggananController::class, 'store']);
    Route::delete('/event/delete', [EventController::class, 'destroy']);
    Route::get('/admin/modal/editlangganan/{id}/edit', [LanggananController::class, 'edit']);
    Route::put('/admin/modal/editlangganan/{id}', [LanggananController::class, 'update']);

    Route::get('/admin/modal/addpertandingan', [PertandinganController::class, 'create']);
    Route::post('/admin/modal/addpertandingan', [PertandinganController::class, 'store']);
    Route::delete('/event/delete', [EventController::class, 'destroy']);
    Route::get('/admin/modal/editpertandingan/{id}/edit', [PertandinganController::class, 'edit']);
    Route::put('/admin/modal/editpertandingan/{id}', [PertandinganController::class, 'update']);
});

