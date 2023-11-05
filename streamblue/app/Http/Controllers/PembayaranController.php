<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pembayaran;

class PembayaranController extends Controller
{
    public function index()
    {
        $pembayarans = Pembayaran::all();
        return view('pembayaran', compact('pembayarans'));
    }
    public function prosesPembayaran(Request $request)
    {
        // Di sini, Anda dapat mengakses total harga dari $request
        $total = $request->input('total');

        // Lakukan pemrosesan pembayaran sesuai kebutuhan Anda
        // Misalnya, menyimpan data pembayaran ke database, mengirim email konfirmasi, dll.

        return view('pembayaran', [
            'total' => $total,
        ]);
    }

}
