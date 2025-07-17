@extends('layouts.app')

@section('title', 'Login Pesan untuk ' . $nama)

<style>
    body {
        background: url('/assets/img/aku.jpg') no-repeat center center fixed;
        background-size: cover;
        color:white
    }
</style>

@section('content')
<div class="container py-5 d-flex justify-content-center align-items-center" style="min-height: 70vh;">
    <div class="card shadow" style="width: 350px;">
        <div class="card-body text-center">
            <img src="{{ asset('assets/img/user.jpg') }}" alt="User" class="rounded-circle mb-3 shadow" width="100">
            <h4 class="mb-3">Masuk sebagai <br><strong>{{ $nama }}</strong></h4>

            @if(session('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
            @endif
<form action="{{ route('pesan.login.proses', $nama) }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nama_pengakses" class="form-label">Nama Samaran / Login</label>
            <input type="text" name="nama_pengakses" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Kata Sandi</label>
            <div class="input-group">
                <input type="password" name="password_pengakses" id="password" class="form-control" required>
                <span class="input-group-text" onclick="togglePassword()" style="cursor:pointer;">
                    👁️
                </span>
            </div>
        </div>

        <div class="text-center">
        <button class="btn btn-primary">🔐 Masuk</button>
    </div>
        <a href="{{ url()->previous() }}" class="btn btn-link mt-3">⬅️ Kembali</a>
    </form>
</div>

<script>
    function togglePassword() {
        const input = document.getElementById("password");
        input.type = input.type === "password" ? "text" : "password";
    }
</script>
@endsection



