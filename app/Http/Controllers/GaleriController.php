<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Galeri;


class GaleriController extends Controller
{
   public function index()
   {
      $galeri = Galeri::all();
      return view('galeri.index', compact('galeri'));
   }

   public function show($id)
   {
      $item = Galeri::findOrFail($id);
      return view('galeri.show', compact('item'));
   }
}
