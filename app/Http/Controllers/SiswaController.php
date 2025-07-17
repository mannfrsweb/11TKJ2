<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use App\Models\Siswa;

class SiswaController extends Controller
{

    public function index()
{
    $siswa = \App\Models\Siswa::all();
    return view('siswa.index', compact('siswa'));
}

public function show($id)
{
    $siswa = Siswa::findOrFail($id);
    return view('siswa.show', compact('siswa'));
}

public function update(Request $request, $id)
{
    $siswa = Siswa::findOrFail($id);

    $siswa->hobi = $request->input('hobi');
    $siswa->tentang = $request->input('tentang');
    $siswa->save();

    return redirect()->route('siswa.show', $id)->with('success', 'Biodata berhasil diubah.');
}

 public function storeSample()
     {
       $namaSiswa = [
            "Aga Darian", "Ahmad Daud", "Al-Fathan", "Ardhina", "Anggie", "Argara Delan",
            "Citra", "Clarissa", "Diah Ayu", "Dawam Nur", "Farel", "Fahri",
            "Jeyniah", "Mahala", "Miftah", "M. Valencia", "M. Ahyar", "M. Bayu",
            "Bintang", "M. Salman", "M. Royan", "Naila Z", "Naila K", "Racmadhani",
            "Syafira", "Sandy P",  "Sabryna", "Wilda", "Yuna Scr", "Zeny", "Zahra",
        ];

      foreach ($namaSiswa as $nama) {
            Siswa::create([
                'nama' => $nama,
                'kelas' => 'XI TKJ 2',
                'jurusan' => 'Teknik Komputer & Jaringan',
                'wali_kelas' => 'Bapak latif AS',
                'hobi' => 'Belum diisi',
                'tentang' => 'Belum diisi',
            ]);
        }

        return "Data sample berhasil dimasukkan.";
    }
public function uploadFoto(Request $request, $id)
{
    $request->validate([
        'foto' => 'required|image|mimes:jpeg,png,jpg|max:2048',
    ]);

    $siswa = Siswa::findOrFail($id);

    if ($request->hasFile('foto')) {
        $file = $request->file('foto');
        $filename = time() . '.' . $file->getClientOriginalExtension();

        // ⬇️ Simpan ke storage/app/public/foto
        $file->storeAs('public/foto', $filename);

        // Hapus foto lama
        if ($siswa->foto) {
            Storage::delete('public/foto/' . $siswa->foto);
        }

        $siswa->foto = $filename;
        $siswa->save();
    }

    return back()->with('success', 'Foto berhasil diupload.');
}
}
