
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <title>IT Expo | Beranda</title>
    <style>
        .equal-image {
        max-width: 100%; /* Maksimum lebar gambar */
        max-height: 200px; /* Maksimum tinggi gambar */
        width: 500px; /* Lebar otomatis (sesuai dengan lebar maksimum) */
        height: auto; /* Tinggi otomatis (sesuai dengan tinggi maksimum) */
        object-fit: contain; /* Gambar akan menyesuaikan dengan kotak, tetapi mungkin memiliki spasi kosong di sekitarnya jika aspek rasio berbeda */
    }
    </style>
</head>
<body>
    <div style="display: flex; align-items: center;">
        <img src="../LogoHIMATIF.png" alt="Logo HIMATIF" style="max-width: 50px; margin-right: 10px;">
        <h1 style="margin: 0;">IT EXPO EVENT</h1>
    </div>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/">Mata Lomba <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../Tentang">Tentang</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../Kontak">Kontak</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>


<div class="container">
    <h1 class="mb-4">{{ $kelas->matkul }}</h1>

    <img src="{{ asset('storage/' . $kelas->gambar) }}" alt="{{ $kelas->nama_lomba }}" class="img-fluid mb-4">

    <p class="text-muted">Status: {{ $kelas->status }}</p>

    <!-- Tampilkan konten atau detail lainnya sesuai kebutuhan -->
</div>
