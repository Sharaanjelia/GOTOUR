<?php
  // Memulai sesi
  session_start();

  // Menghubungkan ke database
  $host = 'localhost';
  $username = 'root'; // Sesuaikan dengan pengaturan database Anda
  $password = ''; // Sesuaikan dengan pengaturan database Anda
  $dbname = 'your_database_name'; // Ganti dengan nama database Anda

  // Koneksi ke database
  $conn = new mysqli($host, $username, $password, $dbname);

  // Memeriksa koneksi
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  // Memeriksa apakah form sudah disubmit
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Menangkap data email dan password dari form
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Query untuk mencari email di database
    $sql = "SELECT * FROM users WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    // Jika email ditemukan
    if ($result->num_rows > 0) {
      $user = $result->fetch_assoc();
      
      // Memeriksa password
      if (password_verify($password, $user['password'])) {
        // Password benar, buat session
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['email'] = $user['email'];
        header("Location: ../php/TugasBesar.php"); // Halaman setelah login berhasil
        exit();
      } else {
        echo "Password salah!";
      }
    } else {
      echo "Email tidak ditemukan!";
    }
  }

  $conn->close();
?>