@extends('layouts.app')

@section('title', 'Pesan Masuk untuk ' . ucfirst($untuk))

<style>
    body {
        background: linear-gradient(to right, rgba(0, 0, 0, 0.6), rgba(0,0,0,0)), url('/assets/img/jepang.jpg') no-repeat center center fixed;
        background-size: cover;
        color:white
    }
</style>

@section('content')
<div class="container py-5">
    <h2 class="text-center mb-4">📬 Pesan Masuk untuk <strong>{{ ucfirst($untuk) }}</strong></h2>

    @if($pesans->isEmpty())
        <div class="alert alert-info text-center">Belum ada pesan masuk.</div>
    @else
        @foreach($pesans as $pesan)
            <div class="card mb-3 shadow-sm">
                <div class="card-body">
                    <h5>Dari: {{ $pesan->nama }}</h5>
                    <p><strong>kesan:</strong>{{ $pesan->kesan}}</p>
                    <p><strong>pesan:</strong>{{ $pesan->pesan}}</p>
                    <small class="text-muted">🕒 {{ $pesan->created_at->format('d M Y, H:i') }}</small>
                </div>
            </div>
        @endforeach
    @endif

    <div class="text-center mt-4">
        <a href="{{ route('pendataan') }}" class="btn btn-secondary">⬅️ Kembali</a>
    </div>
</div>
@endsection