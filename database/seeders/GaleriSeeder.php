<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Galeri;


class GaleriSeeder extends Seeder
{
   public function run(): void
   {
      $deskripsi = [
         'Kegiatan belajar di kelas.',
         'Foto bersama setelah presentasi.',
         'Belajar jaringan komputer di lab.',
         'Latihan coding bersama.',
         'Persiapan lomba 17 Agustus.',
         'Mentoring teman sekelas.',
         'Bersih-bersih kelas bersama.',
         'Kenangan sebelum liburan.',
         'Kelompok tugas akhir.',
         'Foto dengan guru wali kelas.',
      ];

      for ($i = 1; $i <= 10; $i++) {
         Galeri::create([
            'judul' => 'Foto Kegiatan ' . $i,
            'gambar' => 'foto' . $i . '.jpg',
            'deskripsi' => $deskripsi[$i - 1],
         ]);
      }
   }
}

