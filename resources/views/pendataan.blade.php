@extends('layouts.app')

@section('title', 'XI TKJ2 - Pendataan & Kesan Pesan')
<style>
    body {
        background: linear-gradient(to right, rgba(0, 0, 0, 0.6), rgba(0,0,0,0)), url('/assets/img/jpn.jpg') no-repeat center center fixed;
        background-size: cover;
        color:white
    }
</style>

@section('content')
<div class="container mt-5 mb-5">
    <a href="{{ route('landing') }}" class="btn btn-outline-primary mb-3" style="color: white;">⬅️ Kembali ke Halaman awal</a>
    <h2 class="text-center mb-4" style=" color: white;">Form Ke kelas & Kesan Pesan</h2>

    <div class="row">
        {{-- 📋 PENDATAAN --}}
        <div class="col-md-6 mb-4">
            <div id="pendataanBox" class="edit-box">
                <h5 class="edit-label text-center" onclick="toggleForm('pendataan')">📝 Isi Data Nama Kamu</h5>
                <form method="POST" action="{{ route('pendataan.store') }}" class="edit-form mt-3">
                    @csrf
                    <div class="mb-3">
                        <label>Nama Lengkap</label>
                        <input type="text" name="nama" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label>Kelas</label>
                        <input type="text" name="kelas" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label>Jurusan</label>
                        <input type="text" name="jurusan" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label>Wali Kelas</label>
                        <input type="text" name="wali_kelas" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">✅ YUK Masuk</button>
                </form>
            </div>
        </div>

        {{-- 💬 KESAN & PESAN --}}
        <div class="col-md-6 mb-4">
            <div id="kesanBox" class="edit-box">
                <h5 class="edit-label text-center" onclick="toggleForm('kesan')">💬 Kesan & Pesan</h5>
                <div class="edit-form mt-3 text-center">
                    <p class="mb-3">Pilih kepada siapa kamu ingin menyampaikan kesan & pesan:</p>
                    <div class="d-grid gap-2 col-10 mx-auto">
                        <a href="{{ route('kesan.walikelas') }}" class="btn btn-warning">👨‍🏫 Untuk Wali Kelas</a>
                        <a href="{{ route('kesan.ketuakelas') }}" class="btn btn-info text-white">👩‍🎓 Untuk Ketua Kelas</a>
                        <a href="{{ route('pesan.siswa') }}" class="btn btn-info">👥 Untuk Siswa Lain </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
   <a href="{{ route('refleksi.index') }}" class="btn btn-outline-secondary mt-4" style="color: black; background-color: aqua;">📖 Lihat Refleksi & Saran Semua Siswa</a>
</div>

{{-- ✅ STYLE --}}
<style>
.edit-box {
    background-color: #f9f9f9;
    padding: 20px;
    border-radius: 12px;
    box-shadow: 0 2px 6px rgba(0,0,0,0.1);
    transition: all 0.3s ease;
}
.edit-box:hover {
    background-color: #f1f1f1;
}
.edit-label {
    font-weight: bold;
    font-size: 18px;
    cursor: pointer;
}
.edit-form {
    display: none;
}
.edit-box.open .edit-form {
    display: block;
}
</style>

{{-- ✅ SCRIPT --}}
<script>
function toggleForm(id) {
    const box = document.getElementById(id + 'Box');
    box.classList.toggle('open');
}
</script>
@endsection