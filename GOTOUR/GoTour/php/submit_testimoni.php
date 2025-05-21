<?php
// Pastikan sudah terkoneksi dengan database MySQL
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $description = $_POST['description'];
    
    // Menangani upload file gambar
    $targetDir = "../uploads/";
    $targetFile = $targetDir . basename($_FILES["photo"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    if (getimagesize($_FILES["photo"]["tmp_name"]) === false) {
        $uploadOk = 0;
    }

    if ($_FILES["photo"]["size"] > 2000000) {
        $uploadOk = 0;
    }

    if ($imageFileType != "jpg" && $imageFileType != "png" &&
        $imageFileType != "jpeg" && $imageFileType != "gif") {
        $uploadOk = 0;
    }

    if ($uploadOk == 0) {
        echo "Maaf, file Anda tidak dapat diunggah.";
    } else {
        if (move_uploaded_file($_FILES["photo"]["tmp_name"], $targetFile)) {
            $photoPath = "uploads/" . basename($_FILES["photo"]["name"]);
            $stmt =$koneksi->prepare("INSERT INTO testimonials (name, description, photo) VALUES (?, ?, ?)");
            $stmt->execute([$name, $description, $photoPath]);
            echo "File " . htmlspecialchars(basename($_FILES["photo"]["name"])) . " telah diunggah dan testimoni Anda telah berhasil dikirim!";
        } else {
            echo "Maaf, terjadi kesalahan saat mengunggah file Anda.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Testimoni</title>
    <style>
        /* Reset dasar */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: #f4f4f4;
            color: #333;
            line-height: 1.6;
        }

        /* Navbar */
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #004080;
            padding: 10px 20px;
            color: white;
        }

        .navbar .logo img {
            height: 50px;
        }

        .nav-links {
            list-style: none;
            display: flex;
            gap: 20px;
        }

        .nav-links a {
            color: white;
            text-decoration: none;
            font-weight: bold;
        }

        .nav-links a:hover {
            text-decoration: underline;
        }

        /* Section Testimoni */
        #add-testimoni {
            max-width: 600px;
            background: white;
            margin: 50px auto;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        #add-testimoni h2 {
            text-align: center;
            color: #004080;
            margin-bottom: 20px;
        }

        form label {
            display: block;
            margin-bottom: 6px;
            font-weight: bold;
            color: #333;
        }

        form input[type="text"],
        form textarea,
        form input[type="file"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        form textarea {
            resize: vertical;
            min-height: 100px;
        }

        button[type="submit"] {
            display: block;
            width: 100%;
            background-color: #0073e6;
            color: white;
            border: none;
            padding: 12px;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button[type="submit"]:hover {
            background-color: #005bb5;
        }

        /* Responsif */
        @media (max-width: 600px) {
            .navbar {
                flex-direction: column;
                align-items: flex-start;
            }

            .nav-links {
                flex-direction: column;
                width: 100%;
                gap: 10px;
            }

            #add-testimoni {
                margin: 20px;
                padding: 20px;
            }
        }
    </style>
</head>
<body>



<section id="add-testimoni">
    <h2>Tambah Testimoni</h2>
    <br>
    <form action="submit_testimoni.php" method="POST" enctype="multipart/form-data">
        <label for="name">Nama:</label>
        <input type="text" name="name" required>
        <br>
        <label for="description">Deskripsi Testimoni:</label>
        <textarea name="description" required></textarea>
        <br>
        <label for="photo">Foto:</label>
        <input type="file" name="photo" accept="image/*" required>
        <br>
        <button type="submit">Kirim Testimoni</button>
        <br>
    </form>
</section>

</body>
</html>
