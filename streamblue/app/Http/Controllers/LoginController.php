<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use App\Models\User;

class LoginController extends Controller
{
    public function create()
    {
        $user = User::all();
        return view('login');
    }

    public function store(Request $request)
    {
        $request->validate([
            'mail' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('mail', 'password');

        if (Auth::guard('user')->attempt($credentials)) {
            // Jika autentikasi berhasil
            $user = Auth::user();

            // Periksa apakah user sudah memiliki pemesanan_id
            if ($user->pemesanan_id > 0) {
                // Redirect ke halaman home jika sudah memiliki pemesanan_id
                return redirect('/')->with('success', 'Anda berhasil login.');
            } else {
                // Redirect ke halaman langganan jika belum memiliki pemesanan_id
                $userId = $user->id;
                return redirect('/')->with('success', 'Anda berhasil login.');
            }
        } else {
            // Jika autentikasi gagal, alihkan kembali ke halaman login
            throw ValidationException::withMessages([
                'mail' => 'Email atau password salah.',
            ]);
        }
    }


    public function logout(Request $request)
    {
        Auth::guard('user')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
