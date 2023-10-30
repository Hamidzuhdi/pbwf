<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Langganan;
use App\Models\Pemesanan;

class PemesananController extends Controller
{
    public function index(Request $request)
    {
        $langganans = Langganan::all();
        // Mengakses parameter query yang dikirimkan dari halaman langganan
        $langgananId = $request->input('langgananId');
        $langgananGambar = $request->input('langgananGambar');

        // Lakukan apa pun yang perlu Anda lakukan dengan parameter query, misalnya menampilkan gambar langganan
        return view('pemesanan', [
            'langganans' => $langganans,
            'langgananId' => $langgananId,
            'langgananGambar' => $langgananGambar,
        ]);
    }
}
