<?php
  // Memulai sesi untuk menangani login jika sudah berhasil
  session_start();
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form</title>
  <link rel="stylesheet" href="../css/Login.css">
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
          <li><a href="../php/paket wisata.php">Paket Wisata</a></li>
          <li><a href="../php/kategori.php">Kategori</a></li>
          <li><a href="../php/destinasipopuler.php">Destinasi Populer</a></li>
          <li><a href="../php/layanan.php">Layanan</a></li>
          <li><a href="../php/testimoni.php">Testimoni</a></li>
          <li><a href="../php/blog1.php">Blog</a></li>
          <li><a href="../php/bantuankami.php" class="Bantuan Kami-btn">Bantuan Kami</a></li> 
        </ul>
        <div class="auth-buttons">
          <a href="../php/Login.php" class="login-btn">Login</a>
          <a href="../php/daftar khai.php" class="signup-btn">Daftar</a>
        </div>
      </nav>
    </header>

    <br><br>
    <div class="login-container">
      <div class="login-box">
        <h2>Login</h2>

        <!-- Form Login -->
        <form action="loginprocess.php" method="POST">
          <div class="input-group">
            <input type="email" name="email" placeholder="Email" required>
          </div>

          <div class="input-group">
            <input type="password" name="password" placeholder="Password" required>
          </div>

          <div class="options">
            <label>
              <input type="checkbox" name="remember-me"> Remember me
            </label>
            <a href="#">Forgot Password?</a>
          </div>
          <button type="submit" class="btn">Login</button>
          <p>Don't have an account? <a href="../php/daftar khai.php">Register</a></p>
        </form>
      </div>
    </div>
  </div>

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
</body>
</html>