@extends('layouts.app')

@section('title', 'Pesan untuk ' . $nama)

<style>
    body {
        background: linear-gradient(to right, rgba(0, 0, 0, 0.6), rgba(0,0,0,0)), url('/assets/img/aku.jpg') no-repeat center center fixed;
        background-size: cover;
        color:white
    }
</style>

@section('content')
<div class="container py-5">
    <h2 class="text-center mb-4">📨 Pesan dari Teman untuk <strong>{{ $nama }}</strong></h2>

    @if($pesan->count() == 0)
        <div class="alert alert-info text-center">Belum ada pesan masuk untuk {{ $nama }}.</div>
    @else
        <div class="row">
            @foreach($pesan as $item)
                <div class="col-md-6 mb-4">
                    <div class="card shadow-sm border-primary">
                        <div class="card-body">
                            <h5 class="card-title">Dari: {{ $item->nama_pengirim }}</h5>
                            <hr>
                            @if($item->pesan_kesan)
                                <p><strong>Pesan & Kesan:</strong> <br> {{ $item->pesan_kesan }}</p>
                            @endif
                            <small class="text-muted d-block mt-2 text-end">🕒 {{ $item->created_at->format('d M Y, H:i') }}</small>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif

    <div class="text-center mt-4">
         <a href="{{ route('siswa.index') }}" class="btn btn-outline-primary mb-3" style="color: white;">⬅️ Kembali ke Daftar Siswa</a>
    </div>
</div>
@endsection