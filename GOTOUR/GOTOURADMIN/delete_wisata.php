<?php
include 'config.php';
$id = $_GET['id'];

// Hapus gambar dari folder
$data = $conn->query("SELECT * FROM berita WHERE id=$id")->fetch_assoc();
if ($data['gambar'] && file_exists("images/" . $data['gambar'])) {
    unlink("images/" . $data['gambar']);
}

// Hapus data dari DB
$conn->query("DELETE FROM berita WHERE id=$id");
header("Location: product.php");
