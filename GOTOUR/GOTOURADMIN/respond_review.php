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

if (isset($_GET['id'])) {
    $review_id = $_GET['id'];

    // Mengambil data ulasan dari database
    $sql = "SELECT * FROM reviews WHERE id = $review_id";
    $result = $conn->query($sql);
    $review = $result->fetch_assoc();
}

// Menangani form pengiriman tanggapan
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $response = $_POST['response'];

    if (!empty($response)) {
        // Menyimpan tanggapan ke database
        $sql = "INSERT INTO responses (review_id, response) VALUES ('$review_id', '$response')";
        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('Tanggapan berhasil dikirim!'); window.location.href='review.php';</script>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tanggapi Ulasan</title>
    
    <!-- CSS Internal -->
    <style>
        /* Styling umum */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        h1 {
            text-align: center;
            margin-top: 20px;
            font-size: 2rem;
            color: #333;
        }

        /* Container utama untuk form dan informasi ulasan */
        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            margin-top: 30px;
        }

        /* Styling untuk form */
        form {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        label {
            font-size: 1rem;
            font-weight: bold;
            color: #333;
        }

        textarea {
            width: 100%;
            padding: 12px;
            border-radius: 6px;
            border: 1px solid #ddd;
            font-size: 1rem;
            resize: vertical;
        }

        button {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            font-size: 1rem;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #45a049;
        }

        /* Styling untuk menampilkan ulasan yang diberikan */
        ulasan {
            margin-top: 20px;
            padding: 10px;
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 6px;
        }

        ulasan p {
            font-size: 1rem;
            color: #333;
            margin: 10px 0;
        }

        /* Styling untuk detail ulasan */
        ulasan strong {
            font-weight: bold;
            color: #333;
        }

        ulasan .review-detail {
            margin-bottom: 15px;
        }

        /* Styling untuk footer */
        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px;
            position: fixed;
            width: 100%;
            bottom: 0;
        }

        /* Styling untuk responsive */
        @media screen and (max-width: 768px) {
            .container {
                width: 90%;
            }
            h1 {
                font-size: 1.5rem;
            }
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Tanggapi Ulasan</h1>

        <!-- Form Pengiriman Tanggapan -->
        <form method="POST" action="">
            <label for="response">Tanggapan:</label>
            <textarea id="response" name="response" rows="5" placeholder="Tulis tanggapan Anda di sini..." required></textarea>
            <button type="submit">Kirim Tanggapan</button>
        </form>

        <!-- Menampilkan Ulasan Pengguna -->
        <h3>Ulasan yang Diberikan:</h3>
        <p><strong>Rating:</strong> <?php echo $review['rating']; ?> Bintang</p>
        <p><strong>Nama Pengguna:</strong> <?php echo $review['user_name']; ?></p>
        <p><strong>Komentar:</strong> <?php echo $review['comment']; ?></p>
        <p><strong>Tanggal:</strong> <?php echo $review['created_at']; ?></p>
    </div>

</body>
</html>
