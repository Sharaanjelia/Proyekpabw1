<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destinasi Populer - GoTour</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #121212;
            color: #eee;
            font-family: 'Poppins', sans-serif;
        }

        nav.navbar {
            background-color: #000;
        }

        nav a.nav-link, nav .navbar-brand {
            color: #fff !important;
            font-weight: 500;
            transition: color 0.2s;
        }

        nav a.nav-link:hover {
            color: #ccc !important;
        }

        h2 {
            color: #fff;
        }

        .card {
            border: none;
            border-radius: 12px;
            overflow: hidden;
            background-color: #1e1e1e;
            transition: all 0.3s ease;
            box-shadow: 0 4px 8px rgba(255,255,255,0.05);
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(255,255,255,0.1);
        }

        .card-img-top {
            height: 200px;
            object-fit: cover;
        }

        .card-title {
            color: #fff;
        }

        .card-text {
            color: #ccc;
        }

        .btn-dark {
            background-color: #000;
            border: 1px solid #444;
            border-radius: 8px;
            transition: all 0.3s;
        }

        .btn-dark:hover {
            background-color: #222;
            border-color: #666;
        }

        footer {
            background-color: #000;
            color: #aaa;
            text-align: center;
            padding: 20px 0;
            margin-top: 40px;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg">
  <div class="container">
    <a class="navbar-brand fw-bold" href="#">GoTour</a>
    <ul class="navbar-nav ms-auto">
      <li class="nav-item"><a href="#" class="nav-link">Beranda</a></li>
      <li class="nav-item"><a href="#" class="nav-link">Paket Wisata</a></li>
      <li class="nav-item"><a href="#" class="nav-link active">Destinasi Populer</a></li>
      <li class="nav-item"><a href="#" class="nav-link">Blog</a></li>
      <li class="nav-item"><a href="#" class="nav-link">Login</a></li>
    </ul>
  </div>
</nav>

<div class="container my-5">
    <h2 class="text-center mb-3 fw-bold">Destinasi Populer</h2>
    <p class="text-center mb-5 text-secondary">Temukan destinasi wisata terbaik dan paling populer untuk liburan Anda!</p>

    <div class="row">
        @foreach ($destinasi as $d)
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <img src="{{ asset('images/' . $d['gambar']) }}" class="card-img-top" alt="{{ $d['nama'] }}">
                <div class="card-body">
                    <h5 class="card-title fw-semibold">{{ $d['nama'] }}</h5>
                    <p class="card-text">{{ $d['deskripsi'] }}</p>
                </div>
                <div class="card-footer text-center bg-transparent">
                    <a href="#" class="btn btn-dark px-4 py-2">Selengkapnya</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

<footer>
    <p class="mb-0">© 2025 GoTour. Semua Hak Dilindungi 🖤</p>
</footer>

</body>
</html>