@extends('layouts.app')

@section('title', 'Refleksi & Saran Siswa TKJ 2')
<style>
    body {
        background: linear-gradient(to right, rgba(0, 0, 0, 0.6), rgba(0,0,0,0)), url('/assets/img/apa.jpg') no-repeat center center fixed;
        background-size: cover;
        color:white
    }
</style>
@section('content')
<div class="container py-5">
    <h2 class="text-center mb-4" style=" color: white;">📖 Refleksi dan Saran dari Siswa</h2>

    @if($refleksiSemua->isEmpty())
        <div class="alert alert-warning text-center">Belum ada refleksi yang dikirim.</div>
    @else
        @foreach($refleksiSemua as $refleksi)
            <div class="card mb-4 shadow-sm border-start-info">
                <div class="card-body">
                    <h5><strong>{{ $refleksi->nama_pengirim }}</strong> 🕒 {{ $refleksi->created_at->format('d M Y, H:i') }}</h5>
                    @if($refleksi->target_selanjutnya)
                        <p><strong>Target Selanjutnya:</strong><br> {{ $refleksi->target_selanjutnya }}</p>
                    @endif
                    @if($refleksi->pesan_pkl)
                        <p><strong>Pesan Selama PKL:</strong><br> {{ $refleksi->pesan_pkl }}</p>
                    @endif
                    @if($refleksi->pesan_sekolah)
                        <p><strong>Pesan untuk Sekolah:</strong><br> {{ $refleksi->pesan_sekolah }}</p>
                    @endif
                    @if($refleksi->saran_tkj2)
                        <p><strong>Pesan untuk TKJ 2:</strong><br> {{ $refleksi->saran_tkj2 }}</p>
                    @endif
                </div>
            </div>
        @endforeach
    @endif

    <div class="text-center mt-4">
        <a href="{{ url()->previous() }}" class="btn btn-secondary">⬅️ Kembali</a>
    </div>
</div>
@endsection