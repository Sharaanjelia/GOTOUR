<?php
// Koneksi ke database
$servername = "localhost";
$username = "root"; // Ganti dengan username database Anda
$password = ""; // Ganti dengan password database Anda
$dbname = "gotour"; // Ganti dengan nama database Anda

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Mengambil ulasan dari database
$sql = "SELECT * FROM reviews ORDER BY created_at DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin - Ulasan</title>
    <link rel="stylesheet" href="style.css">
    <style>
        /* Styling untuk tabel */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        .action-links {
            margin-top: 10px;
        }

        .action-links a {
            margin-right: 10px;
            text-decoration: none;
            color: #3498db;
        }

        .action-links a:hover {
            text-decoration: underline;
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
            <li><a href="Wisata.php">Wisata</a></li>
            <li><a href="users.php">Users</a></li>
            <li><a href="review.php" class="active">Review</a></li>
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
                <div class="notifications">
                    <span>Messages</span>
                    <span>Notifications</span><br>
                </div>
                <div class="profile-container">
                    <img src="img/yaya.jpg" alt="Profile" class="rounded-circle" style="width:40px; height:40px; object-fit:cover;">
                    <span>Shara Anjelia</span>
                </div>
            </div>
        </header>

        <!-- Content for Viewing Reviews -->
        <h1>Ulasan Pengguna</h1>

        <!-- Tabel Ulasan -->
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Rating</th>
                    <th>Nama Pengguna</th>
                    <th>Komentar</th>
                    <th>Tanggal</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result->num_rows > 0) {
                    $no = 1;
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $no . "</td>";
                        echo "<td>" . $row['rating'] . " Bintang</td>";
                        echo "<td>" . $row['user_name'] . "</td>";
                        echo "<td>" . $row['comment'] . "</td>";
                        echo "<td>" . $row['created_at'] . "</td>";
                        echo "<td class='action-links'>
                                <a href='delete_review.php?id=" . $row['id'] . "'>Hapus</a> | 
                                <a href='respond_review.php?id=" . $row['id'] . "'>Tanggapi</a>
                              </td>";
                        echo "</tr>";
                        $no++;
                    }
                } else {
                    echo "<tr><td colspan='6'>Tidak ada ulasan.</td></tr>";
                }

                $conn->close();
                ?>
            </tbody>
        </table>
    </div>

</body>
</html>
