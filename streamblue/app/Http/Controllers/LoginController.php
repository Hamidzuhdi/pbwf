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
            // Jika autentikasi berhasil, alihkan ke halaman yang sesuai
            $userId = Auth::user()->id;  // Menggunakan Auth::user() untuk mendapatkan user yang sedang login
            return redirect('/langganan?userId=' . $userId)->with('success', 'Anda berhasil login.');
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
