<?php 
//01. Melakukan koneksi ke MySQL dan memilih database
$host = "localhost";
$user = "root";
$password = "";

$dbname = "gotour";

$conn = mysqli_connect($host, $user, $password, $dbname);
if (!$conn) {
	die ("Koneksi ke MySQL berhasil");
} 

?>