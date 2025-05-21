<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Statistik</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <!-- Sidebar -->
  <div class="sidebar">
    <div class="sidebar-header">
      <h2>GOTOUR</h2>
    </div>
    <ul class="sidebar-menu">
      <li><a href="dashboard.php">Dashboard</a></li>
      <li><a href="product.php">Products</a></li>
      <li><a href="users.php">Users</a></li>
      <li><a href="review.php">review</a></li>
      <li><a href="userposts.php">User Posts</a></li>
      <li><a href="useractivity.php">User Activity</a></li>
    </ul>
  </div>

  <!-- Main Content -->
  <div class="main-content">
    <!-- Header -->
    <header class="header d-flex justify-content-between align-items-center mb-4">
      <input type="text" class="form-control w-25" placeholder="Search" id="searchInput">
      <div class="d-flex align-items-center">
        <span class="me-3">Messages</span>
        <span class="me-3">Notifications</span>
        <div class="profile-container d-flex align-items-center">
          <img src="img/yaya.jpg" alt="Profile Picture" class="rounded-circle" style="width:40px; height:40px; object-fit:cover; margin-right:10px;">
          <span>Shara Anjelia</span>
        </div>
      </div>
    </header>

    <!-- Statistik -->
    <h1 class="mb-4">Statistik</h1>
    <div class="row mb-4">
      <!-- Grafik Garis -->
      <div class="col-md-6">
        <h5 class="chart-title green-bg">Data Grafik Garis (Chart Garis)</h5>
        <div class="chart-container">
          <canvas id="lineChart"></canvas>
        </div>
      </div>
      <!-- Grafik Batang -->
      <div class="col-md-6">
        <h5 class="chart-title blue-bg">Data Grafik Batang (Chart Batang)</h5>
        <div class="chart-container">
          <canvas id="barChart"></canvas>
        </div>
      </div>
    </div>

    <!-- Tabel Statistik Pengunjung -->
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

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script>
    // Grafik Garis (Line Chart)
    const lineCtx = document.getElementById('lineChart').getContext('2d');
    new Chart(lineCtx, {
      type: 'line',
      data: {
        labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'],
        datasets: [{
          label: 'Jumlah Pengunjung',
          data: [7200, 4000, 5500, 2500, 9500, 7000, 3800, 13000, 12300, 11500, 19300, 20500],
          borderColor: '#28a745',
          fill: false
        }]
      },
      options: {
        responsive: true
      }
    });

    // Grafik Batang (Bar Chart)
    const barCtx = document.getElementById('barChart').getContext('2d');
    new Chart(barCtx, {
      type: 'bar',
      data: {
        labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'],
        datasets: [{
          label: 'Jumlah Pengunjung',
          data: [7200, 4000, 5500, 2500, 9500, 7000, 3800, 13000, 12300, 11500, 19300, 20500],
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
