<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kesan;
use App\Models\PesanUmum;
use App\Models\KesanPesan;

class KesanController extends Controller
{
   public function walikelas() 
   {
    return view('kesan.walikelas');
   }

 public function storeWaliKelas(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'kesan' => 'required',
            'pesan' => 'required',
        ]);

        KesanPesan::create([
            'nama' => $request->nama,
            'sebagai' => 'Wali Kelas',
            'kesan' => $request->kesan,
            'pesan' => $request->pesan,
        ]);

        return back()->with('success', 'Kesan & Pesan untuk Wali Kelas berhasil dikirim!');
    }

   public function ketuaKelas()
{
      return view('kesan.ketuakelas');
}



public function storeKetuaKelas(Request $request)
{
    $request->validate([
        'nama' => 'required',
        'kesan' => 'required',
        'pesan' => 'required',
    ]);

    KesanPesan::create([
        'nama' => $request->nama,
        'sebagai' => 'Ketua Kelas',
        'kesan' => $request->kesan,
        'pesan' => $request->pesan,
    ]);

    return back()->with('success', 'Kesan & Pesan berhasil dikirim!');
}
}






