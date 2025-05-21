<?php
// Koneksi ke database
$conn = new mysqli("localhost", "root", "", "gotouradmin");

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Product Management - GoTour</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <style>
    /* Gaya Umum */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Arial', sans-serif;
    }

    body {
      background-color: #f9f9f9;
    }

    /* Sidebar */
    .sidebar {
      background-color: #343a40;
      color: white;
      height: 100vh;
      position: fixed;
      width: 220px;
      padding-top: 20px;
      box-shadow: 4px 0 8px rgba(0, 0, 0, 0.2);
      border-radius: 0 10px 10px 0;
    }

    .sidebar-header {
      text-align: center;
      padding: 10px;
      margin-bottom: 20px;
    }

    .sidebar h2 {
      font-size: 1.2rem;
      color: white;
    }

    .sidebar-menu {
      list-style-type: none;
      padding: 0;
      margin-top: 20px;
    }

    .sidebar-menu li {
      margin-bottom: 10px;
    }

    .sidebar-menu li a {
      text-decoration: none;
      color: white;
      font-size: 0.9rem;
      display: block;
      padding: 8px 20px;
      border-radius: 5px;
      transition: background-color 0.3s ease;
    }

    .sidebar-menu li a:hover {
      background-color: #495057;
    }

    /* Konten Utama */
    .main-content {
      margin-left: 220px;
      padding: 20px;
    }

    /* Header */
    .header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding-bottom: 20px;
      border-bottom: 1px solid #ddd;
    }

    /* Search input */
    .search input {
      padding: 8px;
      width: 250px;
      border-radius: 5px;
      border: 1px solid #ddd;
      transition: width 0.3s ease;
    }

    .search input:focus {
      width: 300px;
      outline: none;
      border-color: #007bff;
    }

    /* User info */
    .user-info {
      display: flex;
      align-items: center;
    }

    .logout-btn {
      background-color: #dc3545;
      color: white;
      padding: 8px 15px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    .welcome {
      font-size: 1rem;
      margin-right: 20px;
    }

    /* Modal */
    .modal {
      display: none;
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.5);
      justify-content: center;
      align-items: center;
      z-index: 1000;
    }

    .modal-dialog {
      background: #fff;
      padding: 20px;
      border-radius: 8px;
      max-width: 500px;
      width: 90%;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
    }
  </style>
</head>

<body>
  <!-- Sidebar -->
  <div class="sidebar">
    <div class="sidebar-header">
      <h2>GOTOUR</h2>
    </div>
    <ul class="sidebar-menu">
      <li><a href="dashboard.php">Dashboard</a></li>
      <li><a href="wisata.php" class="active">Wisata</a></li>
      <li><a href="users.php">Users</a></li>
      <li><a href="complaints.php">Complaints</a></li>
      <li><a href="userposts.php">User Posts</a></li>
      <li><a href="useractivity.php">User Activity</a></li>
    </ul>
  </div>

  <!-- Main Content -->
  <div class="main-content">
    <!-- Header -->
    <header class="header">
      <div class="search">
        <input type="text" placeholder="Search Products">
      </div>
      <div class="user-info">
        <div class="welcome">
          Welcome, sharaanjelia@gmail.com
        </div>
        <button class="logout-btn">Logout</button>
      </div>
    </header>

  
    <!-- Product Table -->
    <div class="tab-pane fade show active" id="berita" role="tabpanel">
                <h2 class="my-4">Daftar Paket Wisata</h2>
                <a href="tambah_paket.php" class="btn btn-primary mb-3">+ Tambah Paket Wisata Baru</a>
                
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead class="table-dark">
                            <tr>
                                <th>No</th>
                                <th>Nama Paket Wisata</th>
                                <th>Tanggal</th>
                                <th>Deskripsi</th>
                                <th>Gambar</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql = "SELECT * FROM wisata ORDER BY id DESC";
                            $result = $conn->query($sql);
                            $no = 1;
                            while($row = $result->fetch_assoc()): 
                            ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= htmlspecialchars($row['judul']) ?></td>
                                <td><?= date('d/m/Y', strtotime($row['tanggal'])) ?></td>
                                <td class="news-content"><?= nl2br(htmlspecialchars(substr($row['konten'], 0, 100))) ?>...</td>
                                <td>
                                    <?php if(!empty($row['gambar'])): ?>
                                    <img src="uploads/<?= htmlspecialchars($row['gambar']) ?>" width="100">
                                    <?php else: ?>
                                    <span class="text-muted">Tidak ada gambar</span>
                                    <?php endif; ?>
                                </td>
                                <td class="action-buttons">
                                    <a href="edit_paket.php?id=<?= $row['id'] ?>" class="btn btn-sm btn-warning">Edit</a>
                                    <a href="hapus_wisata.php?id=<?= $row['id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                                </td>
                            </tr>
                            <?php endwhile; ?>
                        </tbody>
                    </table>
                </div>
            </div>
</body>

</html>
