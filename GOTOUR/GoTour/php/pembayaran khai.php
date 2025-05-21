<?php
// You can add PHP logic here if needed
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Metode Pembayaran Wisata</title>
    <link rel="stylesheet" href="../css/pembayaran khai.css">
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
<br>
<br>
<br>
    <main>
        <div class="container">
            <h1>Pemesanan dan Pembayaran Wisata</h1>

            <form id="booking-form">
                <section>
                    <h2>Informasi Wisatawan</h2>
                    <label for="full-name">Nama Lengkap:</label>
                    <input type="text" id="full-name" name="full-name" required>

                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>

                    <label for="phone">Nomor Telepon:</label>
                    <input type="tel" id="phone" name="phone" required>
                </section>

                <section>
                    <h2>Pilih Paket Wisata</h2>
                    <label for="tour-package">Paket Wisata:</label>
                    <select id="tour-package" name="tour-package" required>
                        <option value="">--Pilih Paket Wisata--</option>
                        <option value="ciwidey">Barusan Hills Ciwidey Paket 3 Hari 2 Malam - Rp 2,000,000</option>
                        <option value="valley">Ciwidey Valley Hot Paket 2 Hari 1 Malam - Rp 1,500,000</option>
                        <option value="braga">Braga Paket 3 Hari 2 Malam - Rp 2,000,000</option>
                        <option value="Tafso Barn paket 2 Hari 1 Malam Mulai Dari">Tafso Barn paket 2 Hari 1 Malam - Rp 1,000,000</option>
                        <option value="Lembang paket 2 Hari 1 Malam Mulai Dari">Lembang paket 2 Hari 1 Malam - Rp 1,000,000</option>
                        <option value="Orchid Forest Cikole paket 2 Hari 1 Malam Mulai Dari">Orchid Forest Cikole paket 2 Hari 1 Malam - 1,200,000</option>
                        <option value="kampung cai ranva paket 2 Hari 1 Malam Mulai Dari">Kampung Cai Ranva Paket 2 Hari 1 Malam - 1,300,000</option>
                        <option value="the lodge maribaya paket 2 Hari 1 Malam Mulai dari">The Lodge Maribaya paket 2 Hari 1 Malam - 1,300,000</option>
                        <option value="tebing karaton paket 2 hari 1 malam mulai dari">Tebing Karaton paket 2 hari 1 malam - 800,000</option>
                        <option value="taman hutan paket 1 hari 1 malam mulai dari">Taman Hutan paket 1 Hari 1 Malam - 800,000</option>
                        <option value="kawah putih paket 1 hari 1 malam mulai dari">Kawah Putih paket 1 hari 1 malam - 800,000</option>
                        <option value="the great paket 2 hari 1 malam mulai dari">The Great paket 2 hari 1 malam - 800,000</option>
                    </select>
                </section>

                <section>
                    <h2>Pilih Metode Pembayaran</h2>
                    <label for="payment-method">Metode Pembayaran:</label>
                    <select id="payment-method" name="payment-method" onchange="updatePaymentForm()" required>
                        <option value="">--Pilih Metode Pembayaran--</option>
                        <option value="">Transfer Bank</option>
                        <option value="credit-card">Kartu Kredit</option>
                        <option value="digital-wallet">E-Wallet</option>
                        <option value="cash">Uang Tunai</option>
                    </select>

                    <div id="transfer" class="form-section">
                        <h3>Transfer Bank</h3>
                        <label for="bank-name">Nama Bank:</label>
                        <input type="text" id="bank-name" name="bank-name">

                        <label for="account-number">Nomor Rekening:</label>
                        <input type="text" id="account-number" name="account-number">

                        <button type="submit"><a href="../php/notif.php">Bayar dengan Transfer Bank</a></button>
                    </div>

                    <div id="credit-card" class="form-section">
                        <h3>Kartu Kredit</h3>
                        <label for="card-number">Nomor Kartu:</label>
                        <input type="text" id="card-number" name="card-number">

                        <label for="card-holder">Nama Pemilik Kartu:</label>
                        <input type="text" id="card-holder" name="card-holder">

                        <label for="cvv">CVV:</label>
                        <input type="password" id="cvv" name="cvv">

                        <button type="submit"><a href="../php/notif.php">Bayar dengan Kartu Kredit</a></button>
                    </div>

                    <div id="digital-wallet" class="form-section">
                        <h3>E-Wallet</h3>
                        <label for="wallet-platform">Nama Platform (OVO, GoPay, DANA):</label>
                        <input type="text" id="wallet-platform" name="wallet-platform">

                        <label for="phone-wallet">Nomor Telepon:</label>
                        <input type="text" id="phone-wallet" name="phone-wallet">

                        <button type="submit"><a href="../php/notif.php">Bayar dengan E-Wallet</a></button>
                    </div>

                    <div id="cash" class="form-section">
                        <h3>Uang Tunai</h3>
                        <label for="cash">Nominal:</label>
                        <input type="text" id="cash" name="cash">

                        <button type="submit"><a href="../php/notif.php">Bayar dengan Uang Tunai</a></button>
                    </div>
                </section>
            </form>
        </div>
    </main>
<br>
<br>

    <footer>
        <div class="container1">
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
        function updatePaymentForm() {
            const method = document.getElementById("payment-method").value;
            const sections = document.querySelectorAll(".form-section");

            sections.forEach(section => section.style.display = "none");

            if (method && document.getElementById(method)) {
                document.getElementById(method).style.display = "block";
            }
        }
    </script>

</body>
</html>
