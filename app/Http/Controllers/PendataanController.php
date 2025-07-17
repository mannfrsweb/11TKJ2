<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PendataanController extends Controller
{
    public function index()
    {
        return view('pendataan');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:100',
            'kelas' => 'required|string',
            'jurusan' => 'required|string',
            'wali_kelas' => 'required|string',
        ]);

        Session::put('pendataan', $request->all());

        return redirect()->route('siswa.index'); 
    }
}
