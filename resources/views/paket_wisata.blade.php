<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paket Wisata Unggulan - GoTour</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Poppins', sans-serif;
        }
        .paket-card {
            border: none;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 3px 10px rgba(0,0,0,0.1);
            transition: transform 0.2s;
        }
        .paket-card:hover {
            transform: translateY(-5px);
        }
        .paket-card img {
            height: 200px;
            object-fit: cover;
        }
        .diskon {
            color: red;
            font-weight: bold;
        }
        .rating {
            color: gold;
        }
        .btn-detail {
            background-color: black;
            color: white;
            border-radius: 8px;
            text-transform: uppercase;
            font-weight: 500;
        }
        .btn-detail:hover {
            background-color: #333;
        }
    </style>
</head>
<body>
    <div class="container py-5">
        <h2 class="text-center mb-4 fw-bold">Paket Wisata Unggulan</h2>
        <div class="row">
            @foreach($paketWisata as $paket)
            <div class="col-md-4 mb-4">
                <div class="card paket-card">
                    <img src="{{ asset('images/'.$paket['gambar']) }}" class="card-img-top" alt="{{ $paket['nama'] }}">
                    <div class="card-body">
                        <h5 class="card-title fw-bold text-capitalize">{{ $paket['nama'] }}</h5>
                        <p class="mb-1">{{ $paket['durasi'] }}</p>
                        <p class="mb-1">{{ $paket['harga'] }}</p>
                        <p class="diskon mb-2">Diskon: {{ $paket['diskon'] }}</p>
                        <div class="rating mb-3">
                            @for ($i = 0; $i < $paket['rating']; $i++)
                                ★
                            @endfor
                        </div>
                        <a href="#" class="btn btn-detail w-100">Lihat Detail</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</body>
</html>
