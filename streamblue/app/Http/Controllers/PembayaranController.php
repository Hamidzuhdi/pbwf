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

    public function store(Request $request)
    {
        // Validasi request
        $request->validate([
            'total_bayar' => 'required|integer',
            'pemesanan_id' => 'required|integer',
            'gambar' => 'required|string',
            'status' => ['required', 'in:menunggu,berhasil,gagal'],
        ]);

        // Simpan data transaksi ke database
        $pembayaran = new Pembayaran();
        $pembayaran->total_bayar = $request->input('total_bayar');
        $pembayaran->pemesanan_id = $request->input('pemesanan_id');

        // Tambahkan atribut lain yang perlu disimpan
        $pembayaran->save();

        // Redirect atau tampilkan pesan sukses, sesuaikan dengan kebutuhan Anda
        return redirect("/live")
        ->with('success', 'Transaksi berhasil disimpan.');
    }

}
