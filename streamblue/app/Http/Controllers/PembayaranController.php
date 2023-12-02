<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pembayaran;
use Illuminate\Support\Facades\DB;
use App\Models\Pemesanan;
use Illuminate\Support\Facades\Storage;

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
    public function aindex()
    {
        $pembayarans = Pembayaran::all();
        return view('/admin/page/apembayaran', compact('pembayarans'));
    }


// ...

public function store(Request $request)
{
    // Validasi request
    $request->validate([
        'total_bayar' => 'required|integer',
        'pemesanan_id' => 'required|integer',
        'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    // Simpan data transaksi ke database
    $pembayaran = new Pembayaran();
    $pembayaran->total_bayar = $request->input('total_bayar');
    $pembayaran->pemesanan_id = $request->input('pemesanan_id');

    // Simpan gambar
    if ($request->hasFile('gambar')) {
        $gambar = $request->file('gambar');
        $nama_gambar = time() . '.' . $gambar->getClientOriginalExtension();

        // Simpan gambar ke direktori public/gambar
        $gambar->storeAs('gambar', $nama_gambar, 'public');

        // Simpan nama gambar ke atribut 'gambar' pada model Pembayaran
        $pembayaran->gambar = $nama_gambar;
    }

    $path = $gambar->storeAs('gambar', $nama_gambar, 'public');

if (!$path) {
    // Handle the error, log it, or return a response
    return response()->json(['error' => 'Image upload failed'], 500);
}

    // Tambahkan atribut lain yang perlu disimpan
    $pembayaran->save();

    // Redirect atau tampilkan pesan sukses, sesuaikan dengan kebutuhan Anda
    return redirect("/live")->with('success', 'Transaksi berhasil disimpan.');
}


    public function resetspb($id)
    {

     DB::table('pembayarans')->where('id', $id)->update(['status' => 'berhasil']);

     return redirect('/apembayaran')->with('success', 'SS berhasil direset menjadi 0.');
    }

    public function resetspg($id)
    {

     DB::table('pembayarans')->where('id', $id)->update(['status' => 'gagal']);

     return redirect('/apembayaran')->with('success', 'SS berhasil direset menjadi 1.');

    }

}
