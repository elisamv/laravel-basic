<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IT Expo | MataLomba</title>
    <!-- Menambahkan meta tag untuk mengatur karakter set dan tampilan responsif pada perangkat -->
 <!-- Bootstrap CSS -->
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }
        /* Mengatur tampilan halaman web secara umum, termasuk font, margin, padding, dan warna latar belakang */

        header {
            color: #000000;
            text-align: center;
            padding: 10px 10px;
        }
        /* Mengatur tampilan header halaman web, termasuk warna latar belakang, warna teks, dan padding */

        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            max-width: 1200px; /* Lebar maksimum kontainer */
            margin: 0 auto; /* Pusatkan kontainer */
            padding: 20px; /* Ruang di sekitar kontainer */
        }
        /* Mengatur tampilan kontainer utama yang mengelilingi semua lomba */

        .row {
            width: 100%;
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }
        /* Mengatur tampilan baris yang berisi lomba-lomba */

        .lomba {
            width: calc(33.33% - 20px); /* Lebar setiap lomba, dengan jarak antara lomba */
            margin: 10px; /* Jarak antara setiap lomba */
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 10px;
            text-align: center;
        }
        /* Mengatur tampilan setiap lomba, termasuk lebar, jarak, dan border */

        .lomba img {
            max-width: 200px;
            width: 100%;
            height: auto;
            border-radius: 5px;
            margin-bottom: 10px; /* Jarak antara gambar dan deskripsi lomba */
        }
        /* Mengatur tampilan gambar lomba, termasuk lebar maksimum dan jarak dari deskripsi */

        .button {
            display: inline-block;
            padding: 5px 15px;
            border-radius: 8px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            text-align: center;
        }
        /* Mengatur tampilan tombol "Daftar" */

        @media (max-width: 768px) {
            .container {
                padding: 10px; /* Mengurangi ruang di sekitar kontainer untuk layar yang lebih kecil */
            }

            .lomba {
                width: calc(50% - 10px); /* Lebar lomba untuk layar yang lebih kecil */
            }
        }
        img {
            max-width: 50px;
            width: 100%;
        }

        .header {
            display: flex; /* Menggunakan Flexbox untuk menyusun secara horizontal */
            align-items: center; /* Menyusun elemen secara vertikal di tengah */
        }

        .header img {
            margin-right: 10px;
            margin-left: 10px; /* Memberi jarak kanan antara gambar dan teks */
        }

        h1{
            font-size: 28px;
            margin-bottom: 20px;
        }
        /* Media query untuk layar dengan lebar maksimum 768px, mengatur ulang tampilan kontainer dan lomba */
        
    </style>
</head>
<body>
    <div class="header">
        <img src="LogoHIMATIF.png" alt="Logo HIMATIF">
        <h1>IT EXPO EVENT</h1>
    </div>
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/">Beranda <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Tentang">Tentang</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Lomba">Mata Lomba</a>
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
    <header>
        <h1>Mata Lomba - IT Expo</h1>
<<<<<<< HEAD
        <a href="/lomba/create" class="btn btn-primary">Tambah</a>
    </header>
    <!-- Bagian header dengan judul halaman -->
    <div class="row">
        @foreach ($lomba as $lombaItem)
        <div class="lomba">
            <img src="{{ asset('storage/' . $lombaItem->gambar) }}" alt="{{ $lombaItem->nama_lomba }}">
            <h3>{{ $lombaItem->nama_lomba }}</h3>
            <p>{{ $lombaItem->deskripsi }}</p>
            <a href="/Daftar" class="button">Daftar</a>
        </div>
        @endforeach
    </div>
    
    <!-- Baris pertama -->
    
=======
    </header>
    <!-- Bagian header dengan judul halaman -->

    <!-- Baris pertama -->
    <div class="row">
        <!-- Lomba pertama -->
        <div class="lomba">
            <img src="LogooKTI.png" alt="Logo KTI">
            <h3>Lomba Karya Tulis Ilmiah (KTI)</h3>
            <p>Perlombaan menulis karya ilmiah tentang topik IT terkini, Bisnis, Pengabdian Masyarakat, Hukum.</p>
            <a href="#" class="button">Daftar</a>
        </div>
        <!-- Lomba kedua -->
        <div class="lomba">
            <img src="LogoEssay.png" alt="Logo Essay">
            <h3>Lomba Essay</h3>
            <p>Perlombaan menulis esai mengenai peran teknologi dalam masyarakat.</p>
            <a href="#" class="button">Daftar</a>
        </div>
        <!-- Lomba ketiga -->
        <div class="lomba">
            <img src="LogoWebProgramming.png" alt="Logo Web Programming">
            <h3>Web Programming</h3>
            <p>Perlombaan untuk mengembangkan situs web kreatif dan fungsional.</p>
            <a href="#" class="button">Daftar</a>
        </div>
    </div>

    <!-- Baris kedua -->
    <div class="row">
        <!-- Lomba keempat -->
        <div class="lomba">
            <img src="LogoCerdasCermat.png" alt="Logo Cerdas Cermat IT">
            <h3>Cerdas Cermat IT</h3>
            <p>Perlombaan berbasis pengetahuan seputar teknologi informasi.</p>
            <a href="#" class="button">Daftar</a>
        </div>
        <!-- Lomba kelima -->
        <div class="lomba">
            <img src="LogoMobileLegend.jpeg" alt="Logo Mobile Legend">
            <h3>Mobile Legend</h3>
            <p>Turnamen permainan Mobile Legends.</p>
            <a href="#" class="button">Daftar</a>
        </div>
        <!-- Lomba keenam -->
        <div class="lomba">
            <img src="LogoPUBGMobile.png" alt="Logo PUBG Mobile">
            <h3>PUBG Mobile</h3>
            <p>Turnamen permainan PUBG Mobile.</p>
            <a href="#" class="button">Daftar</a>
        </div>
    </div>
>>>>>>> 3e0806c8b562b5ecbe93fda1452c2d1610550843
    <!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
<<<<<<< HEAD
</html>
=======
</html>
>>>>>>> 3e0806c8b562b5ecbe93fda1452c2d1610550843
