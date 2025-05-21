<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Review Restoran</title>
    <link rel="stylesheet" href="../css/halaman review.css">
    <style>
        /* Mengatur jarak antar elemen dan menghindari tumpang tindih */
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }

        .container {
            margin-top: 50px; /* Memberikan jarak antara header dan konten */
        }

        header {
            background-color: #333;
            color: white;
            padding: 20px;
            margin-bottom: 20px; /* Menambahkan jarak antara header dan konten */
        }

        nav .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navbar .logo img {
            height: 50px;
        }

        .nav-links {
            list-style: none;
            padding: 0;
        }

        .nav-links li {
            display: inline-block;
            margin-right: 15px;
        }

        .nav-links a {
            text-decoration: none;
            color: white;
            font-size: 16px;
        }

        .auth-buttons a {
            text-decoration: none;
            color: white;
            margin-left: 10px;
        }

        /* Styling untuk form review */
        .container h1 {
            text-align: center;
            margin-bottom: 30px;
        }

        form {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f4f4f4;
            border-radius: 8px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        input[type="text"], textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 4px;
            border: 1px solid #ccc;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }

        /* Styling untuk footer */
        footer {
            background-color: #333;
            color: white;
            padding: 20px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <nav class="navbar">
                <div class="logo">
                    <a href="../php/../php/tentangkami.php"> 
                        <img src="../images/IMG_7079-removebg-preview.png" alt="GoTour Logo">
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

        <h1>Berikan Review Anda</h1>
        <form id="reviewForm" method="POST" action="submit_review.php">
            <label for="user_name">Nama Pengguna:</label>
            <input type="text" id="user_name" name="user_name" placeholder="Masukkan nama Anda" required>
            
            <label for="rating">Rating (1-5 bintang):</label>
            <div class="rating" id="rating">
                <span class="star" data-value="1">&#9733;</span>
                <span class="star" data-value="2">&#9733;</span>
                <span class="star" data-value="3">&#9733;</span>
                <span class="star" data-value="4">&#9733;</span>
                <span class="star" data-value="5">&#9733;</span>
            </div>
            <input type="hidden" name="rating" id="ratingInput" required>

            <label for="comment">Komentar:</label>
            <textarea id="comment" name="comment" placeholder="Tulis komentar Anda di sini..." rows="5" required></textarea>

            <button type="submit" id="submitReview">Kirim Review</button>
        </form>
        
    </div>

    <footer>
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
    </footer>

    <script>
    let selectedRating = 0;
    const stars = document.querySelectorAll('.star');
    stars.forEach(star => {
        star.addEventListener('click', () => {
            selectedRating = star.getAttribute('data-value');
            document.getElementById('ratingInput').value = selectedRating;
            updateStarSelection();
        });
    });

    function updateStarSelection() {
        stars.forEach(star => {
            if (star.getAttribute('data-value') <= selectedRating) {
                star.classList.add('selected');
            } else {
                star.classList.remove('selected');
            }
        });
    }
    </script>
</body>
</html>
