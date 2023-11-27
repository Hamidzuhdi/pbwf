<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pertandingan;
use Illuminate\Support\Facades\DB;

class PertandinganController extends Controller
{
    public function index()
    {
        $pertandingans = Pertandingan::all();
        return view('jadwal', compact('pertandingans'));
    }
    public function aindex()
    {
        $pertandingans = Pertandingan::all();
        return view('/admin/page/apertandingan', compact('pertandingans'));
    }

    public function cuy()
    {
        $pertandingans = Pertandingan::all();
        return view('live', compact('pertandingans'));
    }

   public function create()
   {
       $pertandingans = Pertandingan::all();
       return view('admin/modal/addpertandingan', compact('pertandingans'));
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
            'tgl_pertandingan' => 'required|date',
            'nama_pertandingan' => 'required|string',
            'liga' => 'required|string',
            'langganan_id' => 'required|integer'
        ]);

        Pertandingan::create($validatedData);

        return redirect('/apertandingan')->with('success', 'Pertandingan berhasil disimpan.');
    }



   /**
    * Display the specified resource.
    *
    * @param  string  $id
    * @return \Illuminate\Http\Response
    */

   public function edit($id)
   {
       $pertandingan = DB::table('pertandingans')->where('id',$id)->first();
       return view('/admin/modal/editpertandingan', ['pertandingan' => $pertandingan]);
   }

       public function update(Request $request, $id)
   {
       $validatedData = $request->validate([
        'tgl_pertandingan' => 'required|date',
        'nama_pertandingan' => 'required|string',
        'liga' => 'required|string',
       ]);

       DB::table('pertandingans')->where('id', $id)->update($validatedData);

       return redirect('/apertandingan');
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
