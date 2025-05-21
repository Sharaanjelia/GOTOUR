<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Koneksi ke database
    $servername = "localhost";
    $username = "root"; // Ganti dengan username database Anda
    $password = ""; // Ganti dengan password database Anda
    $dbname = "gotour"; // Ganti dengan nama database Anda

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Koneksi gagal: " . $conn->connect_error);
    }

    // Menghapus ulasan berdasarkan ID
    $sql = "DELETE FROM reviews WHERE id = $id";
    if ($conn->query($sql) === TRUE) {
        echo "Ulasan berhasil dihapus.";
        header("Location: review.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
