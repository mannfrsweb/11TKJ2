<!-- resources/views/surat/index.blade.php -->
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Masukkan Namamu</title>
  <style>
    body {
      margin: 0;
      padding: 60px 20px;
      font-family: 'Roboto', sans-serif;
      color: black;
      text-align: center;

      background-image: url('/assets/img/jepang.jpg');
      background-size: cover;
      background-position: center center;
      background-repeat: no-repeat;
      background-attachment: fixed;

   
    }
    input {
      padding: 10px;
      font-size: 16px;
      width: 250px;
    }
    button {
      padding: 10px 20px;
      background: #3498db;
      color: white;
      border: none;
      border-radius: 5px;
      margin-top: 10px;
      cursor: pointer;
    }
    button:hover {
        background-color: gray;
        color: white;
    }
  </style>
</head>
<body>
  <h1>✨ Masukkan Namamu ✨</h1>
  <form action="{{ route('surat.buka') }}" method="GET">
    <input type="text" name="nama" placeholder="Nama Kamu" required>
    <br>
    <button type="submit">Lanjut</button>
  </form>
</body>
</html>