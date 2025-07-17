<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    protected $table = 'siswas';

    protected $fillable = [
    'nama', 'kelas', 'jurusan', 'wali_kelas', 'foto', 'hobi', 'tentang', 'nama_login', 'password_login'
];

    
}

