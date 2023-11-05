<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Langganan;
use App\Models\Pemesanan;
use App\Models\Transaksi;

class PemesananController extends Controller
{
    public function index(Request $request)
    {
        // Di sini, Anda mengakses parameter query dari URL
        $langgananId = $request->input('langgananId');
        $langgananGambar = $request->input('langgananGambar');
        $langgananharga = $request->input('langgananharga');

        // Lakukan apa pun yang perlu Anda lakukan dengan parameter query, misalnya menampilkan gambar langganan
        return view('pemesanan', [
            'langgananId' => $langgananId,
            'langgananGambar' => $langgananGambar,
            'langgananharga' => $langgananharga
        ]);
    }

    public function store(Request $request)
    {
        // Validasi request
        $request->validate([
            'total_harga' => 'required|integer',
            'durasi' => 'required|integer|min:1',
            'user_id' => 'required|integer',
            'langganan_id' => 'required',
        ]);

        // Simpan data transaksi ke database
        $pemesanan = new Pemesanan();
        $pemesanan->langganan_id = $request->input('langganan_id');
        $pemesanan->user_id = $request->input('user_id');
        $pemesanan->durasi = $request->input('durasi');
        $pemesanan->total_harga = $request->input('total_harga');

        // Tambahkan atribut lain yang perlu disimpan
        $pemesanan->save();

        // Redirect atau tampilkan pesan sukses, sesuaikan dengan kebutuhan Anda
        return redirect('/pembayaran')->with('success', 'Transaksi berhasil disimpan.');
    }
}
