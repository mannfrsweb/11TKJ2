<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PesanSiswa extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_pengirim',
        'nama_tujuan',
        'pesan_kesan',
        'target_selanjutnya',
        'pesan_pkl',
        'pesan_sekolah',
        'saran_tkj2',
    ];
}
