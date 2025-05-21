<?php
// You can add PHP logic here if needed
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tentang GoTour</title>
  <link rel="stylesheet" href="../css/Tugasbesar.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
</head>
<body>

  <div class="container">
    <header>
        <nav class="navbar">
          <div class="logo">
            <img src="../images/IMG_7079-removebg-preview.png" alt="GoTour Logo" style="height: 50px;"> 
          </div>
          <ul class="nav-links">
            <li><a href="../php/TugasBesar.php">Beranda</a></li>
            <li><a href="../php/paketwisata.php">Paket Wisata</a></li>
            <li><a href="../php/kategori.php">Kategori</a></li>
            <li><a href="../php/destinasi_populer.php">Destinasi Populer</a></li>
            <li><a href="../php/layanan.php">Layanan</a></li>
            <li><a href="../php/testimoni.php">Testimoni</a></li>
            <li><a href="../php/blog1.php">Blog</a></li>
            <li><a href="../php/bantuankami.php" class="Bantuan Kami-btn">Bantuan Kami</a></li> 
          </ul>
          <div class="auth-buttons">
              <a href="../php/Login.php" class="login-btn">Login</a>
              <a href="../php/daftarkhai.php" class="signup-btn">Daftar</a>
          </div>
        </nav>
    </header>

    <section id="beranda">
        <div class="hero">
            <div class="carousel">
                <div class="carousel-item">
                    <video autoplay muted loop controls>
                        <source src="../images/latarbelakang.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                    <div class="carousel-caption">
                        <h2>Selamat Datang di GoTour</h2>
                        <p>Kami membantu membuat liburan Anda menjadi lebih mudah dan menyenangkan.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="../images/HalUtama1.jpg" alt="Gambar 2">
                    <div class="carousel-caption">
                        <h2>Ayo Menjelajah Bersama Kami</h2>
                        <p>Kami telah melayani ratusan hingga ribuan wisatawan dengan hasil yang memuaskan</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <video autoplay muted loop controls>
                        <source src="../images/lt.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                    <div class="carousel-caption">
                        <h2>Dengan Sangat Banyak Tempat Pariwisata</h2>
                        <p>Disini banyak pilihan tempat pariwisata dan bisa menyesuaikan dengan jadwal anda</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h3>Informasi</h3>
                    <ul>
                        <li>Alamat: Jl. Telekomunikasi, Bandung, Jawa Barat, Indonesia</li>
                        <li>Telepon: 0821-2937-9808</li>
                        <li>Email: <a href="mailto:tamafataya01@gmail.com">tamafataya01@gmail.com</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h3>Media Sosial</h3>
                    <ul>
                        <li><a href="#">Instagram</a></li>
                        <li><a href="#">Facebook</a></li>
                        <li><a href="#">Twitter</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h3>Layanan</h3>
                    <ul>
                        <li>Paket Wisata</li>
                        <li>Pemandu Wisata</li>
                        <li>Transportasi</li>
                        <li>Akomodasi</li>
                        <li>Aktivitas Tambahan</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h3>Bantuan</h3>
                    <ul>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Syarat dan Ketentuan</a></li>
                        <li><a href="#">Kebijakan Privasi</a></li>
                    </ul>
                </div>
            </div>
            <div class="copyright">
                <p>&copy; 2024 GoTour. Hak cipta dilindungi.</p>
            </div>
        </div>
    </footer>

  </div>

</body>

</html>
