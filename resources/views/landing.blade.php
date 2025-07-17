@extends('layouts.app')

@section('title', ' XI TKJ 2 - Selamat Datang')

@section('body-style', '')

@section('content')

<!-- ✅ NAVBAR -->
<nav class="navbar navbar-expand-lg  bg-light fixed-top shadow">
  <div class="container">
    <a class="navbar-brand" href="/">XI TKJ 2</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="#tentang">Tentang</a></li>
        <li class="nav-item"><a class="nav-link" href="#galeri">Galeri</a></li>
        <li class="nav-item"><a class="nav-link" href="#kontak">Kontak</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- ✅ HOME SECTION -->
<section id="home">
  <div class="landing">
    <h1>Selamat Datang di XI TKJ 2</h1>
    <p class=>Heyyy kamuu IYAA kamuu 👋 <br> Lihat pesan dulu yukk ada apa yaa ⬇️⬇️</p>
     <a href="{{ route('surat.index') }}" class="button">Pesan buat kamu</a>
    <p>Yukk isi nama kamu untuk masuk ke kelas XI TKJ 2!!</p>
    <a href="{{ route('pendataan') }}" class="button">Isi Nama kamu yukk</a>
  </div>
</section>

<!-- ✅ SECTION: TENTANG -->
<section class="tentangkami" id="tentang">
    <div class="container-tentang">
        <div class="tentang-img">
            <img src="{{ asset('assets/galeri/foto10.jpg') }}" alt="Tentang Kami">
        </div>
        <div class="tentang-text">
            <h2>Tentang Kelas XI TKJ 2</h2>
            <p>
                Kelas XI TKJ 2 adalah tempat belajar teknologi jaringan dan komputer untuk generasi masa depan. Kami dikenal solid,
                kompak, dan penuh semangat dalam berbagai kegiatan baik di dalam maupun luar kelas. Kami percaya bahwa semangat belajar
                dan kekompakan akan membawa kami sukses di masa depan.
            </p>

            <h3>Prestasi Kelas</h3>
            <ul>
                <li>Juara 1 Lomba P5 antar kelas</li>
                <li>Juara 1 Lomba Classmeeting 2024</li>
                <li>Juara 1 Lomba Menggambar</li>
                <li>Sering mengirim siswa atau siswi Berprestasi</li>
                <li>Aktif dalam kegiatan bakti sosial dan lomba 17 Agustus</li>
            </ul>
        </div>
    </div>
</section>


<!-- ✅ SECTION: GALERI -->
<section id="galeri" class="galeri-section py-5">
    <div class="container-fluid">
        <h2 class="mb-4 text-center">Galeri Kegiatan</h2>
        <div class="galeri-grid">
            @foreach ($galeri as $item)
                <a href="{{ route('galeri.show', $item->id) }}" class="galeri-item">
                    <img src="{{ asset('assets/galeri/' . $item->gambar) }}" alt="{{ $item->judul }}">
                    <div class="caption">{{ $item->judul }}</div>
                </a>
            @endforeach
        </div>
        <div class="text-center mt-4">
            <a href="{{ route('galeri.index') }}" class="btn btn-primary">Lihat Semua Galeri</a>
        </div>
    </div>
</section>

<!-- ✅ FOOTER -->
<section class="footer-nav" style="background-color: linear-gradient(to right, #c2e9fb, #a1c4fd); color: white; padding: 40px 20px;" id="kontak">
    <div class="footer-nav-container" style="display: flex; flex-wrap: wrap; gap: 40px; justify-content: space-between; max-width: 1200px; margin: auto;">
        
        <div class="footer-nav-logo" style="flex: 1 1 250px;">
            <img src="{{ asset('assets/img/logos.jpg') }}" alt="Logo" style="width: 200px; border-radius: 10px;">
        </div>

        <div class="footer-nav-menu" style="flex: 1 1 250px;">
            <h4 style="margin-bottom: 10px;">NAVIGASI</h4>
            <ul style="list-style: none; padding: 0;">
                <li><a href="#home" style="color: white; text-decoration: none;">Home</a></li>
                <li><a href="#tentang" style="color: white; text-decoration: none;">Tentang Kami</a></li>
                <li><a href="#galeri" style="color: white; text-decoration: none;">Galeri</a></li>
                <li><a href="#kontak" style="color: white; text-decoration: none;">Kontak Kami</a></li>
            </ul>
        </div>

        <div class="footer-nav-contact" style="flex: 1 1 250px;">
            <h4 style="margin-bottom: 10px;">KONTAK</h4>
            <p>XI TKJ 2</p>
            <p>Wali Kelas: Bapak latif AS</p>
            <p>sekolah : SMK BUDI MULIA Karawang barat</p>
            <p> Instragram:<a href="https://instagram.com/exxpoosse.stories" target="_blank"> @exxpoosse.stories</p>
        </div>
    </div>
</section>

<footer class="main-footer">
    <p>&copy; {{ date('Y') }} XI TKJ 2.SMK BUDI MULIA. All rights reserved.</p>
</footer>
@endsection