<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Siswa;


class SiswaSeeder extends Seeder
{
      public function run()
    {
         $namaSiswa = [ "Aga Darian", "Argara Delan", "Al-Fathan", "Ardhina", "Anggie", "Ahmad Daud",
            "Citra", "Clarissa", "Diah Ayu", "Dawam Nur", "Farel", "Fahri",
            "Jeyniah", "Mahala", "Miftah", "M. Valencia", "M. Ahyar", "M. Bayu",
            "Bintang", "M. Salman", "M. Royan", "Naila Z", "Naila K", "Ramdhani Ain",
            "Syafira", "Sandy P",  "Sabryna", "Wilda", "Yuna Scr", "Zeny", "Zahra"
        ];

        foreach ($namaSiswa as $nama) {
            Siswa::create([
                'nama' => $nama,
                'kelas' => 'XI TKJ 2',
                'jurusan' => 'Teknik Komputer & Jaringan',
                'wali_kelas' => 'bapak latif AS',
                'hobi' => 'Belum diisi',
                'tentang' => 'Belum diisi',
            ]);
      }
    }
}
