<?php
// You can add PHP logic here if needed
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Rekomendasi Foto</title>
  <link rel="stylesheet" href="../css/rekomendasifoto.css">
</head>

<body>
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

    <header>
        <h1>Rekomendasi Foto</h1>
        <p>Temukan inspirasi dari koleksi foto terbaik</p>
    </header>

    <div class="container">
        <div class="photo-card">
            <img src="../images/gya fto 2.avif" alt="Foto Duduk" class="photo-img">
            <h3>Gaya Foto 1</h3>
            <p>Kategori: Pose Duduk</p>
        </div>

        <div class="photo-card">
            <img src="../images/gya fto 1.jpg" alt="Foto Alam" class="photo-img">
            <h3>Gaya Foto 2</h3>
            <p>Kategori: Pose Menikmati Alam</p>
        </div>

        <div class="photo-card">
            <img src="../images/gya fto 3.avif" alt="Foto Bebas" class="photo-img">
            <h3>Gaya Foto 3</h3>
            <p>Kategori: Pose Ekspresi Bebas</p>
        </div>

        <div class="photo-card">
            <img src="../images/gya fto 14.jpg" alt="Foto Ceria" class="photo-img">
            <h3>Gaya Foto 4</h3>
            <p>Kategori: Pose ceria</p>
        </div>

        <div class="photo-card">
            <img src="../images/gya fto 5.jpg" alt="Foto Santai" class="photo-img">
            <h3>Gaya Foto 5</h3>
            <p>Kategori: Pose Santai Berdiri</p>
        </div>

        <div class="photo-card">
            <img src="../images/gya fto 6.jpg" alt="Foto Santai" class="photo-img">
            <h3>Gaya Foto 6</h3>
            <p>Kategori: Pose Santai di Jalan</p>
        </div>

        <div class="photo-card">
            <img src="../images/gya fto 7.jpg" alt="Foto Liburan" class="photo-img">
            <h3>Gaya Foto 7</h3>
            <p>Kategori: Pose Liburan</p>
        </div>

        <div class="photo-card">
            <img src="../images/gya fto 16.jpg" alt="Foto Elegan" class="photo-img">
            <h3>Gaya Foto 8</h3>
            <p>Kategori: Pose Elegan</p>
        </div>

        <div class="photo-card">
            <img src="../images/gya fto 10.jpg" alt="Foto Santai" class="photo-img">
            <h3>Gaya Foto 9</h3>
            <p>Kategori: Pose Berjalan Santai</p>
        </div>

        <div class="photo-card">
            <img src="../images/gya fto 11.jpg" alt="Foto Casual Natural" class="photo-img">
            <h3>Gaya Foto 10</h3>
            <p>Kategori: Casual Natural Pose</p>
        </div>

        <div class="photo-card">
            <img src="../images/gya foto 12.jpg" alt="Foto Pemandangan Kota" class="photo-img">
            <h3>Gaya Foto 11</h3>
            <p>Kategori: Headphone dan Pemandangan Kota</p>
        </div>

        <div class="photo-card">
            <img src="../images/gya fto 13.jpg" alt="Foto Playful Candid" class="photo-img">
            <h3>Gaya Foto 12</h3>
            <p>Kategori: Playful Candid Pose</p>
        </div>
    </div>

    <!-- Modal -->
    <div id="myModal" class="modal">
        <span class="close">&times;</span>
        <img class="modal-content" id="modalImage" alt="Foto yang diklik">
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
      </div>
    
    <script>
       const modal = document.getElementById("myModal");
       const modalImage = document.getElementById("modalImage");
       const images = document.querySelectorAll(".photo-card img");
       const closeBtn = document.querySelector(".close");

       document.querySelectorAll(".photo-card img").forEach(image => {
    image.addEventListener("click", () => {
        modal.style.display = "block";
        modalImage.src = image.src;
    });
});

    closeBtn.addEventListener("click", () => {
     modal.style.display = "none";
  });
       // Close modal on click outside the image
        window.addEventListener("click", function (event) {
            if (event.target === modal) {
                modal.style.display = "none";
            }
        });
    </script>
</body>
</html>
