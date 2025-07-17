@extends('layouts.app')
@section('title', 'Semua Galeri')
@section('content')
<div class="container py-5 text-center">
   <h2>Semua Foto Galeri</h2>
   <div class="galeri-grid">
      @foreach ($galeri as $item)
         <a href="{{ route('galeri.show', $item->id) }}" class="galeri-item">
            <img src="{{ asset('assets/galeri/' . $item->gambar) }}" alt="{{ $item->judul }}">
            <div class="caption">{{ $item->judul }}</div>
         </a>
      @endforeach
   </div>
   <div class="text-center mt-4">
    <a href="{{ url('/#galeri') }}" class="btn btn-primary">
     🏠 Halaman Awal
</a>
   </div>
</div>
@endsection