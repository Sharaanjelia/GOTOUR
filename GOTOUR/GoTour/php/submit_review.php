<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Menyambung ke database
    $servername = "localhost";
    $username = "root"; // Ganti dengan username database Anda
    $password = ""; // Ganti dengan password database Anda
    $dbname = "gotour"; // Ganti dengan nama database Anda

    // Koneksi ke database
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Koneksi gagal: " . $conn->connect_error);
    }

    // Mendapatkan data dari form
    $rating = $_POST['rating'];
    $comment = $_POST['comment'];

    // Memasukkan data ke tabel reviews
    $sql = "INSERT INTO reviews (rating, comment) VALUES ('$rating', '$comment')";
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Pengiriman berhasil!'); window.location.href='TugasBesar.php';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
