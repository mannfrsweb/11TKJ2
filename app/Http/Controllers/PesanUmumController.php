<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kesan;
use App\Models\PesanUmum;
use App\Models\KesanPesan;



class PesanUmumController extends Controller
{
    public function loginForm($untuk)
    {
        return view('pesanumum.login', compact('untuk'));
    }

    public function login(Request $request)
    {
        $credentials = [
            'ketua' => 'salmanfrs',
            'wali' => 'latif',
        ];

        $input = $request->input('nama_login');
        $untuk = $request->input('untuk');

        if ($credentials[$untuk] === $input) {
            return redirect()->route('pesanumum.lihat', $untuk);
        }

        return back()->with('error', 'Nama login salah!');
    }




public function lihat($untuk)
{
    // Pastikan 'ketua' → 'Ketua Kelas', dan 'wali' → 'Wali Kelas'
    $jabatan = $untuk === 'ketua' ? 'Ketua Kelas' : 'Wali Kelas';

    // Ambil semua data berdasarkan jabatan
    $pesans = KesanPesan::where('sebagai', $jabatan)->latest()->get();

    return view('pesanumum.lihat', compact('pesans', 'untuk'));
}
}
