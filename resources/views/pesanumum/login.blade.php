@extends('layouts.app')

@section('title', 'Login Pesan ' . ucfirst($untuk))
<style>
    body {
        background: linear-gradient(to right, rgba(0, 0, 0, 0.6), rgba(0,0,0,0)), url('/assets/img/jepang.jpg') no-repeat center center fixed;
        background-size: cover;
        color:white
    }
</style>

@section('content')
<div class="container py-5 text-center">
    <h3>🔐 Masuk Halaman Pesan untuk {{ ucfirst($untuk) }}</h3>

    @if(session('error'))
        <div class="alert alert-danger mt-3">{{ session('error') }}</div>
    @endif

    <form action="{{ route('pesanumum.login', $untuk) }}" method="POST" class="mt-4 mx-auto" style="max-width: 400px;">
        @csrf
        <input type="hidden" name="untuk" value="{{ $untuk }}">
        <div class="mb-3">
            <label>Nama Login:</label>
            <input type="text" name="nama_login" class="form-control" required>
        </div>
        <button class="btn btn-primary w-100">Masuk</button>
    </form>
</div>
@endsection