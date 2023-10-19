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
        <img src="LogoHIMATIF.png" alt="Logo HIMATIF" style="max-width: 50px; margin-right: 10px;">
        <h1 style="margin: 0;">IT EXPO EVENT</h1>
    </div>
    

<!-- Tambahkan GIF di sebelah kanan -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/">Mata Lomba <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Tentang">Tentang</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Kontak">Kontak</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>

<a href="/create" class="btn btn-primary mt-3 ml-3">Tambah</a>

<div class="row ml-3 mt-5">
    <!-- Lomba pertama -->
    <div class="d-flex flex-wrap">
        @foreach($kelas as $kelas)
            <div class="card m-2" style="width: 18rem;">
                <img class="card-img-top equal-image" src="{{ asset('storage/' . $kelas->gambar) }}" alt="{{ $kelas->nama_lomba }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $kelas->nama_lomba }}</h5>
                    <p class="card-text">{{ $kelas->status }}</p>
                    <a href="{{ route('kelas.show', $kelas) }}" class="btn btn-primary">Lihat</a>
                    <a href="{{ route('kelas.edit', $kelas) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('kelas.destroy', $kelas) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>
