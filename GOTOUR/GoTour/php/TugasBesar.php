<?php
  // Add any PHP code here if necessary
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GoTour</title>
  <link rel="stylesheet" href="../php/../css/Tugasbesar.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
  <!-- or -->
  <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
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

      <section id="beranda">
        <div class="hero">
          <div class="carousel">
            <div class="carousel-item">
              <video autoplay muted loop>
                <source src="../images/latarbelakang.mp4" type="video/mp4" >
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
              <video autoplay muted loop>
                <source src="../images/lt.mp4" type="video/mp4" >
              </video>
              <div class="carousel-caption">
                <h2>Dengan Sangat Banyak Tempat Pariwisata</h2>
                <p>Disini banyak pilihan tempat pariwisata dan bisa menyesuaikan dengan jadwal anda</p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section id="paket_wisata">
        <section class="featured-packages">
          <h1>Paket Wisata Unggulan</h1>
          <div class="arrow-icon">&#x25BC;</div>
          <div class="package-cards">
            <div class="card">
              <img src="../images/Barusen Hills Ciwidey.jpg" alt="Barusen Hills ciwidey">
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
              <img src="../images/barga.webp" alt="braga">
              <h3>Braga</h3>
              <p>3 Hari 2 Malam</p>
              <p>Rp2.000.000</p>
              <p class="discount">Diskon: 12%</p>
              <div class="rating">
                <span class="star" onclick="rate(this, 1)">&#9733;</span>
                <span class="star" onclick="rate(this, 2)">&#9733;</span>
                <span class="star" onclick="rate(this, 3)">&#9733;</span>
                <span class="star" onclick="rate(this, 4)">&#9733;</span>
                <span class="star" onclick="rate(this, 5)">&#9733;</span>
              </div>
              <div class="result"></div>
              <button><a href="../php/braga.php">Lihat Detail</a></button>
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
          </div>
        </section>
      </section>

  </div>
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

  <script>
    const carouselItems = document.querySelectorAll('.carousel-item');
    let currentSlide = 0;

    setInterval(() => {
      carouselItems[currentSlide].classList.remove('active');
      currentSlide = (currentSlide + 1) % carouselItems.length;
      carouselItems[currentSlide].classList.add('active');
    }, 7000);

    carouselItems[0].classList.add('active');

    function rate(starElement, star) {
      const result = starElement.parentElement.nextElementSibling;
      result.innerHTML = `Anda memberi rating: ${star} bintang`;
      
      const stars = starElement.parentElement.children;
      for (let i = 0; i < stars.length; i++) {
        if (i < star) {
          stars[i].style.color = "gold";
        } else {
          stars[i].style.color = "gray";
        }
      }
    }
  </script>
</body>

</html>
