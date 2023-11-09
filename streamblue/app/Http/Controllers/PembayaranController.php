<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pembayaran;
use App\Models\Pemesanan;

class PembayaranController extends Controller
{
    public function index(Request $request)
    {
        $pembayarans = Pembayaran::all();
        $langgananharga = $request->input('langgananharga');
        return view('pembayaran', [
            'pembayarans' => $pembayarans,
            'langgananharga' => $langgananharga
        ]);
    }

    public function prosesPembayaran(Request $request)
    {
        // Di sini, Anda dapat mengakses total harga dari $request
        $total = $request->input('total_harga');

        // Lakukan pemrosesan pembayaran sesuai kebutuhan Anda
        // Misalnya, menyimpan data pembayaran ke database, mengirim email konfirmasi, dll.

        return view('pembayaran', [
            'total' => $total,
        ]);
    }
}
