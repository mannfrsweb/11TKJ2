@extends('layouts.app')

@section('title', $item->judul)

@section('content')
<div class="container py-5 text-center" style="max-width: 430px; margin: auto;">
   <h2 class="mb-4" style="font-size: 24px;">{{ $item->judul }}</h2>

   <img src="{{ asset('assets/galeri/' . $item->gambar) }}" alt="{{ $item->judul }}" class="img-fluid rounded shadow-sm mb-3" style="max-height: 400px; width: auto;">

   <p style="font-size: 16px; color: #555;">{{ $item->deskripsi }}</p>

   <a href="{{ route('galeri.index') }}" class="btn btn-secondary mt-4">← Kembali ke Galeri</a>
</div>
@endsection