<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>@yield('title')</title>
  <link rel="icon" href="{{ asset('assets/img/logos.jpg') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
  <!-- Bootstrap CSS CDN -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="@yield('body-style')">
    @yield('content')
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>