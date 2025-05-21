<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Link ke file CSS terpisah -->
    <link href="../php/../css/login.css" rel="stylesheet">
</head>
<body>

    <!-- Header Section -->
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

    <!-- Main Content: Login Form -->
    <div class="auth-container">
        <div class="auth-box">
            <!-- Login Form -->
            <h2>Login</h2>
            <form action="login.php" method="POST">
                <div class="mb-3">
                    <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
                </div>
                <div class="mb-3">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                </div>
                <div class="mb-3">
                    <label for="role" class="form-label text-white">Pilih Role</label>
                    <select class="form-select" id="role" name="role" required>
                        <option value="admin">Admin</option>
                        <option value="member">Member</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary w-100">Login</button>
            </form>
            <div class="auth-footer">
                <span>Belum punya akun? </span> <a href="../php/daftarkhai.php">Daftar sekarang</a>
            </div>
        </div>
    </div>

    <!-- Footer Section -->
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

    <!-- Bootstrap JS & Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>
