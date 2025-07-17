<!-- resources/views/surat/buka.blade.php -->
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Surat Khusus Untukmu</title>
  <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Roboto&display=swap" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
  <style>
    body {
      margin: 0;
      padding: 60px 20px;
      font-family: 'Roboto', sans-serif;
      color: #fff;
      text-align: center;

      background-image: url('/assets/img/jepang.jpg');
      background-size: cover;
      background-position: center center;
      background-repeat: no-repeat;
      background-attachment: fixed;
   
    }

    .overlay {
      background-color: rgba(0, 0, 0, 0.6);
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      z-index: -1;
    }

    .envelope {
      width: 200px;
      margin: auto;
      cursor: pointer;
      transition: transform 0.3s ease;
    }

    .envelope:hover {
      transform: scale(1.05);
    }

    .surat {
      display: none;
      margin-top: 40px;
      padding: 30px;
      max-width: 700px;
      margin-left: auto;
      margin-right: auto;
      background: rgba(255, 255, 255, 0.9);
      border-radius: 10px;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
      color: #333;
      animation: fadeIn 1s ease forwards;
    }

    .surat h2 {
      font-family: 'Pacifico', cursive;
      font-size: 28px;
      margin-bottom: 10px;
    }

    .typed-text {
      font-size: 18px;
      line-height: 1.6;
      min-height: 100px;
      margin-top: 20px;
    }

    .gallery {
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
      gap: 10px;
      margin-top: 20px;
      opacity: 0;
      animation: muncul 1.5s ease 2.5s forwards;
    }

    .gallery img {
      width: 80px;
      height: 80px;
      border-radius: 10px;
      object-fit: cover;
    }

    .btn-kembali {
      margin-top: 30px;
      padding: 10px 20px;
      background-color: #007bff;
      border: none;
      color: white;
      font-weight: bold;
      border-radius: 5px;
      cursor: pointer;
      transition: background-color 0.3s;
    }

    .btn-kembali:hover {
      background-color: #0056b3;
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
    }

    @keyframes muncul {
      to { opacity: 1; }
    }
  </style>
</head>
<body>

  <div class="overlay"></div>

  <h1>✨ Surat Khusus Untukmu ✨</h1>

  <!-- Gambar Surat -->
 <img src="https://cdn-icons-png.flaticon.com/512/561/561127.png" 
       alt="Buka Surat"
       class="envelope"
       id="suratIcon"
       onclick="bukaSurat()">

  <!-- Konten Surat -->
  <div class="surat" id="suratContent">
    <h2>Hai, {{ request('nama') }}!</h2>
    <div class="typed-text" id="typed"></div>

    <div class="gallery">
        <img src="{{ asset('assets/galeri/foto10.jpg') }}">
        <img src="{{ asset('assets/galeri/foto8.jpg') }}">
        <img src="{{ asset('assets/galeri/foto6.jpg') }}">
        <img src="{{ asset('assets/galeri/foto3.jpg') }}">
    </div>

    <a href="{{ url('/') }}">
      <button class="btn-kembali">⬅️ Kembali ke Halaman Awal</button>
    </a>
  </div>

  <script>
    function bukaSurat() {
      document.getElementById('suratIcon').style.display = 'none';
      document.getElementById('suratContent').style.display = 'block';

      new Typed('#typed', {
        strings: [
            `Terima kasih telah menjadi bagian dari cerita ini.`,
            'Semoga langkahmu ke depan nya tercapai yaa....',
            'Alhamdullilah kita semua masih bisa kembali bersama di kelas yang sama wali kelas yang sama siswa yang sama senang mendengar itu 😉 dan kamu juga masih bisa kembali bersama kami mudah-mudahan kita bisa terus kompak yaa kita memang sudah berganti title tapi jangan merubah keseruan nya yaa kalo bisa kita lebih kompak lagi lebih meningkatkan ilmu kita lagi bahkan kalo bisa lebih berprestasi lagi  dan bisa menginspirasi kelas lain..🤗🤗 mudah-mudahan TKJ 2 kita bisa terus bersama yaa sampai lulus bahkan sampai tua karena ini akan menjadi kenangan yang luar biasa karena seperti kata-kata "SETIAP PERTEMUAN PASTI ADA PERPISAHAN" Byeee👋👋 Good Luck {{ request("nama") }}!',
        ],
        typeSpeed: 40,
        backSpeed: 20,
        showCursor: true,
        loop: false,
      });
    }
  </script>

</body>
</html>