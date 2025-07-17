@extends('layouts.app')

@section('title', 'XI TKJ 2 - Daftar Siswa')
<style>
    body {
        background: linear-gradient(to right, rgba(0, 0, 0, 0.6), rgba(0,0,0,0)), url('/assets/img/jpn.jpg') no-repeat center center fixed;
        background-size: cover;
        color:white
    }
</style>


@section('content')
  <h1 class="text-center" style=" color: white;">Daftar Siswa XI TKJ 2</h1>

  <div class="grid">
    @foreach ($siswa as $item)
      <a href="{{ route('siswa.show', $item->id) }}" class="grid-item">
        {{ $item->nama }}
      </a>
    @endforeach
     
  </div>
  <a href="{{ url('/') }}" class="btn btn-primary position-fixed" 
  style="bottom: 20px; right: 20px; z-index: 999;">
     🏠 Halaman Awal
</a>
@endsection