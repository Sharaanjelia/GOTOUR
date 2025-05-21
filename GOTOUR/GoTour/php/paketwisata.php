<?php
// You can add PHP logic here if needed
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Paket Wisata</title>
  <link rel="stylesheet" href="../php/../css/Tugasbesar.css">
</head>
<body>
  <div class="container">
    <header>
        <nav class="navbar">
          <div class="logo">
            <a href="../php/../php/tentangkami.php"> 
              <img src="../images/IMG_7079-removebg-preview.png" alt="GoTour Logo" style="height: 50px;">
            </a>  
          </div>
          <ul class="nav-links">
            <li><a href="../php/TugasBesar.php">Beranda</a></li>
            <li><a href="../php/paketwisata.php">Paket Wisata</a></li>
            <li><a href="../php/kategori.php">Kategori</a></li>
            <li><a href="../php/destinasipopuler.php">Destinasi Populer</a></li>
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

    <section id="paket_wisata"> 
        <section class="featured-packages">
            <h1>Paket Wisata Unggulan</h1>
            <div class="package-cards">
                <div class="card">
                    <img src="../images/Barusen Hills Ciwidey.jpg" alt="Barusen Hills ciwidey" >
                    <h3>Barusan Hills</h3>
                    <p>3 Hari 2 Malam</p>
                    <p>Rp2.000.000</p>
                    <p class="discount">Diskon: 20%</p>
                    <div class="rating">
                        <span class="star" onclick="rate(this, 1)">&#9733;</span>
                        <span class="star" onclick="rate(this, 2)">&#9733;</span>
                        <span class="star" onclick="rate(this, 3)">&#9733;</span>
                        <span class="star" onclick="rate(this, 4)">&#9733;</span>
                        <span class="star" onclick="rate(this, 5)">&#9733;</span>
                    </div>
                    <div class="result"></div>
                    <button><a href="../php/barusen hills ciwidey.php">Lihat Detail</a></button>
                </div>  
                <div class="card">
                    <img src="../images/Ciwidey Valley Hot Spring Waterpark Resort.jpg" alt="ciwidey valley hot">
                    <h3>Ciwidey Valley</h3>
                    <p>2 Hari 1 Malam</p>
                    <p>Rp1.500.000</p>
                    <p class="discount">Diskon: 15%</p>
                    <div class="rating">
                        <span class="star" onclick="rate(this, 1)">&#9733;</span>
                        <span class="star" onclick="rate(this, 2)">&#9733;</span>
                        <span class="star" onclick="rate(this, 3)">&#9733;</span>
                        <span class="star" onclick="rate(this, 4)">&#9733;</span>
                        <span class="star" onclick="rate(this, 5)">&#9733;</span>
                    </div>
                    <div class="result"></div>
                    <button><a href="../php/ciwideyvalley.php">Lihat Detail</a></button>
                </div>
                <div class="card">
                    <img src="../images/tafsor barn.jpg" alt="Tafso Barn">
                    <h3>Tafso Barn</h3>
                    <p>2 Hari 1 Malam</p>
                    <p>Rp1.000.000</p>
                    <p class="discount">Diskon: 15%</p>
                    <div class="rating">
                        <span class="star" onclick="rate(this, 1)">&#9733;</span>
                        <span class="star" onclick="rate(this, 2)">&#9733;</span>
                        <span class="star" onclick="rate(this, 3)">&#9733;</span>
                        <span class="star" onclick="rate(this, 4)">&#9733;</span>
                        <span class="star" onclick="rate(this, 5)">&#9733;</span>
                    </div>
                    <div class="result"></div>
                    <button><a href="../php/tarfor barn.php">Lihat Detail</a></button>
                </div>
                <div class="card">
                    <img src="../images/orchid forest cikole.jpg" alt="Orchid Forest Cikole">
                    <h3>Orchid Forest</h3>
                    <p>2 Hari 1 Malam</p>
                    <p>Rp1.200.000</p>
                    <p class="discount">Diskon: 30%</p>
                    <div class="rating">
                        <span class="star" onclick="rate(this, 1)">&#9733;</span>
                        <span class="star" onclick="rate(this, 2)">&#9733;</span>
                        <span class="star" onclick="rate(this, 3)">&#9733;</span>
                        <span class="star" onclick="rate(this, 4)">&#9733;</span>
                        <span class="star" onclick="rate(this, 5)">&#9733;</span>
                    </div>
                    <div class="result"></div>
                    <button><a href="../php/orchid forest cikole.php">Lihat Detail</a></button>
                </div>
                <div class="card">
                    <img src="../images/kampung cai ranva upas.webp" alt="kampung cai ranva upas">
                    <h3>Kampung Cai</h3>
                    <p>2 Hari 1 Malam</p>
                    <p>Rp1.300.000</p>
                    <p class="discount">Diskon: 18%</p>
                    <div class="rating">
                        <span class="star" onclick="rate(this, 1)">&#9733;</span>
                        <span class="star" onclick="rate(this, 2)">&#9733;</span>
                        <span class="star" onclick="rate(this, 3)">&#9733;</span>
                        <span class="star" onclick="rate(this, 4)">&#9733;</span>
                        <span class="star" onclick="rate(this, 5)">&#9733;</span>
                    </div>
                    <div class="result"></div>
                    <button><a href="../php/kampung Cai Ranca Upas.php">Lihat Detail</a></button>
                </div>
                <!-- Add more packages here -->
            </div>
        </section>
    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h3>Informasi</h3>
                    <ul>
                        <li>Alamat: Jl. Telekomunikasi, Bandung, Jawa Barat, Indonesia</li>
                        <li>Telepon: 0821-2937-9808</li>
                        <li>Email: <a href="../php/mailto:tamafataya01@gmail.com">tamafataya01@gmail.com</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h3>Media Sosial</h3>
                    <ul>
                        <li><a href="../php/#">Instagram</a></li>
                        <li><a href="../php/#">Facebook</a></li>
                        <li><a href="../php/#">Twitter</a></li>
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
                        <li><a href="../php/#">FAQ</a></li>
                        <li><a href="../php/#">Syarat dan Ketentuan</a></li>
                        <li><a href="../php/#">Kebijakan Privasi</a></li>
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
