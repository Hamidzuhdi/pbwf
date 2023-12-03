<?php

namespace App\Http\Controllers;

use App\Models\User; // Pastikan Anda mengimpor namespace User dengan benar
use Illuminate\Support\Facades\Hash; // ini juga jangan lupa
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class RegrisController extends Controller
{
    public function create()
    {
        $users = new User(); // Atau, Anda bisa membuat instance User sesuai kebutuhan aplikasi Anda
        return view('regris', compact('users'));
    }

    public function index(){
        $users = User::all();
        return view('admin.page.auser', compact('users'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => ['required', 'alpha_num', 'string', 'min:3', 'max:20'],
            'mail' => ['required', 'email'],
            'telp' => ['required', 'string', 'min:11', 'max:13'],
            'password' => ['required', 'min:3', 'max:255']
        ]);

        $user = User::where('mail', $request->mail)
            ->orWhere('telp', $request->telp)
            ->orWhere('password', $request->password)
            ->first();

        if ($user) {
            return dd('user sudah ada tolong cari yang lain');
        }

        $user = User::create([
            'nama' => $request->nama,
            'mail' => $request->mail,
            'role' => $request->role,
            'telp' => $request->telp,
            'password' => Hash::make($request->password)
        ]);
        $userId = $user->id;

        session()->flash('sukses', 'Terimakasih registrasi anda berhasil');

        return redirect('/langganan?userId= ' . $userId)->with('success', 'Account berhasil disimpan.');
    }


public function edit($id)
{
    $user = DB::table('users')->where('id', $id)->first();
    return view('/admin/modal/edituser', ['user' => $user]);
}


        public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
         'nama' => 'required|string',
         'mail' => 'required|string',
         'role' => [
            'required',
            Rule::in(['admin', 'customer','superadmin']) // Sesuaikan dengan nilai ENUM yang valid
        ],
         'telp' => 'required|string'
        ]);

        DB::table('users')->where('id', $id)->update($validatedData);

        return redirect('/auser');
    }
}
