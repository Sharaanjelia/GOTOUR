<?php
// You can add PHP logic here if needed
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Notifikasi - GoTour</title>
  <link rel="stylesheet" href="../css/notif.css">
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

    <br>
    <br>

    <div class="header">
      <h1>Notifikasi GoTour</h1>
    </div>

    <div class="notification-container">
      <!-- Notifikasi 1: Rekomendasi Wisata -->
      <div class="notification unread">
        <div class="notification-icon">
          <i class="fas fa-map-marker-alt"></i>
        </div>
        <div class="notification-details">
          <strong>Rekomendasi Wisata di Bandung</strong>
          <p>Temukan destinasi wisata terbaik di Bandung! Klik untuk melihat lebih banyak.</p>
        </div>
        <a href="../php/#" class="view-details" data-detail="Nikmati keindahan Alam! Temukan lebih banyak tempat menarik di GoTour.">Lihat Detail</a>
      </div>

      <!-- Notifikasi 2: Pengingat Jadwal Wisata -->
      <div class="notification">
        <div class="notification-icon">
          <i class="fas fa-bell"></i>
        </div>
        <div class="notification-details">
          <strong>Pengingat Jadwal Wisata</strong>
          <p>Tur ke destinasi yang dipilih dimulai dalam 30 menit. Segera siap-siap dan nikmati petualanganmu!</p>
        </div>
        <a href="../php/#" class="view-details" data-detail="Tur ke destinasi yang dipilih dimulai dalam 30 menit. Pastikan kamu sudah siap untuk berangkat!">Lihat Detail</a>
      </div>

      <!-- Notifikasi 3: Promo Diskon -->
      <div class="notification">
        <div class="notification-icon">
          <i class="fas fa-tags"></i>
        </div>
        <div class="notification-details">
          <strong>Promo Menarik untuk Wisata Bandung!</strong>
          <p>Dapatkan diskon spesial untuk tur di destinasi yang dipilih. Gunakan kode promo 'GOTOUR20' untuk potongan harga.</p>
        </div>
        <a href="../php/#" class="view-details" data-detail="Promo Diskon: Dapatkan diskon mulai dari 5% - 30% untuk tur ke destinasi yang dipilih! Gunakan kode GOTOUR20 saat checkout.">Lihat Detail</a>
      </div>
    </div>

    <!-- Modal untuk detail -->
    <div class="modal" id="detailModal">
      <div class="modal-content">
        <p id="modalText"></p>
        <button class="close-btn" id="closeModal">Tutup</button>
      </div>
    </div>

    <div class="result">
      <button class="carii">
        <a href="../php/halaman review.php">
          review
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-circle-fill" viewBox="0 0 16 16">
            <path d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0M4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 1 0 0-.708.708L10.293 7.5z"/>
          </svg>
        </a>
      </button>
    </div>
    <br>
    
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
    // JavaScript untuk modal
    const modal = document.getElementById('detailModal');
    const modalText = document.getElementById('modalText');
    const closeModal = document.getElementById('closeModal');
    const detailLinks = document.querySelectorAll('.view-details');

    detailLinks.forEach(link => {
      link.addEventListener('click', function(event) {
        event.preventDefault();
        const detail = this.getAttribute('data-detail');
        modalText.textContent = detail;
        modal.style.display = 'flex';
      });
    });

    closeModal.addEventListener('click', function() {
      modal.style.display = 'none';
    });

    window.addEventListener('click', function(event) {
      if (event.target === modal) {
        modal.style.display = 'none';
      }
    });
  </script>
</body>
</html>
