<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Galeri;

class LandingController extends Controller 
{
   public function landing()
   {
      $galeri = Galeri::all();
      return view('landing', compact('galeri'));
   }
}
