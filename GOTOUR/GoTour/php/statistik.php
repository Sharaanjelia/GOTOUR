<?php
// You can add PHP logic here if needed
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Statistik</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
  <style>
    /* Navbar Full Kiri ke Kanan */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: Arial, sans-serif;
    }

    body {
      font-family: Arial, sans-serif;
      color: #333;
    }

    .navbar {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      background-color: #333;
      color: white;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 0 20px;
      z-index: 1000;
    }

    .nav-links {
      list-style: none;
      display: flex;
      gap: 15px;
      margin: 0;
      padding: 0;
    }

    .nav-links li {
      display: inline;
    }

    .nav-links a {
      color: white;
      text-decoration: none;
      transition: color 0.3s ease;
    }

    .nav-links a:hover {
      color: #00bcd4;
    }

    .auth-buttons {
      display: flex;
      gap: 20px;
      margin-right: 20px;
    }

    .auth-buttons a {
      color: white;
      text-decoration: none;
      border: none;
      padding: 10px 20px;
      border-radius: 5px;
      transition: background-color 0.3s ease, color 0.3s ease;
    }

    .auth-buttons a:hover {
      background-color: white;
      color: #333;
    }

    .main-content {
      margin-top: 80px;
    }

    .chart-title {
      text-align: center;
      color: white;
      padding: 10px;
      border-radius: 5px;
    }

    .green-bg {
      background-color: #28a745;
    }

    .blue-bg {
      background-color: #007bff;
    }

    .data-title {
      margin-top: 20px;
      text-align: center;
      font-weight: bold;
    }

    footer {
      background-color: #333;
      color: #fff;
      padding: 20px;
    }

    .container {
      margin: 0 auto;
    }

    .row {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
    }

    .col-md-3 {
      width: 25%;
      margin-bottom: 20px;
    }

    h3 {
      margin-top: 0;
    }

    ul {
      list-style: none;
      padding: 0;
      margin: 0;
    }

    li {
      margin-bottom: 10px;
    }

    a {
      color: #fff;
      text-decoration: none;
    }

    .mb-4 {
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
            <img src="../images/IMG_7079-removebg-preview.png" alt="GoTour Logo" style="height: 50px">
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

    <div class="main-content">
      <h1 class="mb-4">Statistik</h1>
      <div class="row mb-4">
        <div class="col-md-6">
          <h5 class="chart-title green-bg">Data Grafik Garis (Chart Garis)</h5>
          <div class="chart-container">
            <canvas id="lineChart"></canvas>
          </div>
        </div>
        <div class="col-md-6">
          <h5 class="chart-title blue-bg">Data Grafik Batang (Chart Batang)</h5>
          <div class="chart-container">
            <canvas id="barChart"></canvas>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-12">
          <div class="data-table">
            <table class="table">
              <thead>
                <tr>
                  <th>Bulan</th>
                  <th>Pengunjung</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Januari</td>
                  <td>7,200</td>
                </tr>
                <tr>
                  <td>Februari</td>
                  <td>4,000</td>
                </tr>
                <tr>
                  <td>Maret</td>
                  <td>5,500</td>
                </tr>
                <tr>
                  <td>April</td>
                  <td>2,500</td>
                </tr>
                <tr>
                  <td>Mei</td>
                  <td>9,500</td>
                </tr>
                <tr>
                  <td>Juni</td>
                  <td>7,000</td>
                </tr>
                <tr>
                  <td>Juli</td>
                  <td>3,800</td>
                </tr>
                <tr>
                  <td>Agustus</td>
                  <td>12,300</td>
                </tr>
                <tr>
                  <td>September</td>
                  <td>12,300</td>
                </tr>
                <tr>
                  <td>Oktober</td>
                  <td>11,500</td>
                </tr>
                <tr>
                  <td>November</td>
                  <td>19,300</td>
                </tr>
                <tr>
                  <td>Desember</td>
                  <td>20,500</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>

    </div>
  </div>

  <footer>
    <div class="container2">
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

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script>
    const lineCtx = document.getElementById('lineChart').getContext('2d');
    new Chart(lineCtx, {
      type: 'bar',
      data: {
        labels: ['Januari', 'Februari', 'Maret', 'April','Mei', 'Juni', 'Juli', 'Agustus','September', 'Oktober', 'November', 'Desember'],
        datasets: [{
          label: 'Data',
          data: [7.200, 4.000, 5.500, 2.500,9.500, 7.000, 3.800, 20.0000,12.300, 11.500, 19.300, 20.500],
          borderColor: '#28a745',
          fill: false
        }]
      },
      options: {
        responsive: true
      }
    });

    const barCtx = document.getElementById('barChart').getContext('2d');
    new Chart(barCtx, {
      type: 'line',
      data: {
        labels: ['Januari', 'Februari', 'Maret', 'April','Mei', 'Juni', 'Juli', 'Agustus','September', 'Oktober', 'November', 'Desember'],
        datasets: [{
          label: 'Data',
          data: [7.200, 4.000, 5.500, 2.500,9.500, 7.000, 3.800, 13.300,12.300, 11.500, 19.300, 20.500],
          backgroundColor: '#007bff'
        }]
      },
      options: {
        scales: {
          y: {
            beginAtZero: true
          }
        }
      }
    });
  </script>
</body>

</html>
