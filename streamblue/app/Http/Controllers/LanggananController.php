<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Langganan;
use Illuminate\Support\Facades\DB;

class LanggananController extends Controller
{
    public function index(Request $request)
    {
        $userId = $request->input('userId');
        $langganans = Langganan::all();
        return view('langganan', [
            'userId' => $userId,
            'langganans' => $langganans
        ]);
    }

    public function aindex()
    {
        $langganans = Langganan::all();
        return view('/admin/page/alangganan', compact('langganans'));
    }

   public function create()
   {
       $langganans = Langganan::all();
       return view('admin/modal/addlangganan', compact('langganans'));
   }


   /**
    * Store a newly created pemesanan in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'tipe' => 'required|boolean',
            'ket' => 'required|string',
            'gambar' => 'required|string',
            'harga' => 'required|integer'
        ]);

        Langganan::create($validatedData);

        return redirect('/alangganan')->with('success', 'Langganan berhasil disimpan.');
    }



   /**
    * Display the specified resource.
    *
    * @param  string  $id
    * @return \Illuminate\Http\Response
    */

   public function edit($id)
   {
       $langganan = DB::table('langganans')->where('id',$id)->first();
       return view('/admin/modal/editlangganan', ['langganan' => $langganan]);
   }

       public function update(Request $request, $id)
   {
       $validatedData = $request->validate([
        'ket' => 'required|string',
        'gambar' => 'required|string',
        'harga' => 'required|integer'
       ]);

       DB::table('langganans')->where('id', $id)->update($validatedData);

       return redirect('/alangganan');
   }




   /**
    * Remove the specified resource from storage.
    *
    * @param  string  $id
    * @return \Illuminate\Http\Response
    */
//    public function destroy(Request $request)
//    {
//        $id = $request->input('id');
//        $event = Langganan::findOrFail($id);

//        // Loop melalui tiket terkait
//        foreach ($event->tikets as $tiket) {
//            // Menghapus pembayaran terkait tiket
//            $tiket->pembayarans()->delete();
//        }

//        // Menghapus tiket terkait event
//        $event->tikets()->delete();

//        // Menghapus event
//        $event->delete();

//        return redirect('/event')->with('success', 'Event berhasil dihapus beserta data tiket dan pembayaran terkait.');
//    }
}
