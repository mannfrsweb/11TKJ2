<?php

namespace App\Http\Controllers;

use App\Models\PesanSiswa;
use App\Models\Siswa;
use Illuminate\Http\Request;

class PesanSiswaController extends Controller
{
    public function index()
    {
            $namaSiswa = Siswa::pluck('nama')->toArray(); // ✅ Ambil nama asli dari database


        return view('pesan.form', compact('namaSiswa'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_pengirim' => 'required|string|max:100',
            'nama_tujuan' => 'required|string|max:100',
            'pesan_kesan' => 'nullable|string',
            'target_selanjutnya' => 'nullable|string',
            'pesan_pkl' => 'nullable|string',
            'pesan_sekolah' => 'nullable|string',
            'saran_tkj2' => 'nullable|string',
        ]);

        PesanSiswa::create($request->all());

     return back() ->with('success', 'Pesan berhasil dikirim!');
                
    }

public function storeRefleksi(Request $request)
{
    $request->validate([
        'nama_pengirim' => 'required|string|max:100',
        'target_selanjutnya' => 'nullable|string',
        'pesan_pkl' => 'nullable|string',
        'pesan_sekolah' => 'nullable|string',
        'saran_tkj2' => 'nullable|string',
    ]);

    // Simpan refleksi
    PesanSiswa::create([
        'nama_pengirim' => $request->nama_pengirim,
        'nama_tujuan' => '-', // dummy tujuan
        'target_selanjutnya' => $request->target_selanjutnya,
        'pesan_pkl' => $request->pesan_pkl,
        'pesan_sekolah' => $request->pesan_sekolah,
        'saran_tkj2' => $request->saran_tkj2,
    ]);

      return back()->with('success', 'Refleksi berhasil dikirim!');
}


public function formLogin($nama)
{
    return view('pesan.login', compact('nama'));
}

public function loginPesan(Request $request, $nama)
{
    $request->validate([
        'nama_pengakses' => 'required|string|max:100',
        'password_pengakses' => 'required|string|max:100'
    ]);

    $siswa = Siswa::where('nama', $nama)->first();

    if (
        !$siswa ||
        strtolower($request->nama_pengakses) !== strtolower($siswa->nama_login) ||
        $request->password_pengakses !== $siswa->password_login
    ) {
        return back()->with('error', '❌ Nama login atau kata sandi salah!');
    }

    // Jika login cocok, tampilkan halaman pesan yang ditujukan ke dia
    $pesan = PesanSiswa::where('nama_tujuan', $nama)->get();
    return view('pesan.ditujukan', compact('pesan', 'nama'));
}


public function lihatPesanUntuk($nama)
{
    $pesan = PesanSiswa::whereRaw('LOWER(nama_tujuan) = ?', [strtolower($nama)])->get();
    return view('pesan.ditujukan', compact('pesan', 'nama'));
}



public function refleksi()
{
    $refleksiSemua = PesanSiswa::where('nama_tujuan', '-')
        ->where(function ($query) {
            $query->whereNotNull('pesan_kesan')
                ->orWhereNotNull('target_selanjutnya')
                ->orWhereNotNull('pesan_pkl')
                ->orWhereNotNull('pesan_sekolah')
                ->orWhereNotNull('saran_tkj2');
        })
        ->orderBy('created_at', 'desc')
        ->get();

    return view('refleksi.index', compact('refleksiSemua'));
}

}

