<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
 class KesanPesan extends Model
{
    protected $table = 'kesan_pesan';
    protected $fillable = ['nama', 'sebagai', 'kesan', 'pesan'];
}

