<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form</title>
  <link rel="stylesheet" href="../css/kontak.css">
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

    <section class="contact">
        <h1>Kontak Kami</h1>
        <form action="#" method="post">
            <label for="name">Nama:</label>
            <input type="text" id="name" name="name" required>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="message">Pesan:</label>
            <textarea id="message" name="message" required></textarea>
            
            <button type="submit">Kirim</button>
        </form>
    </section>
      
</body>
</html>