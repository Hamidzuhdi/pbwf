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
        $pemesananId = $request->input('pemesananId');
        $totalharga = $request->input('totalharga');
        return view('pembayaran', [
            'pembayarans' => $pembayarans,
            'pemesananId' =>$pemesananId,
            'totalharga' => $totalharga
        ]);
    }

}
