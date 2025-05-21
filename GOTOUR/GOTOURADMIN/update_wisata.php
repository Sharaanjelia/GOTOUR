<?php
require_once 'config.php';

// Validasi ID
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;
if ($id <= 0) {
    die("ID berita tidak valid");
}

// Ambil data berita
$sql = "SELECT * FROM berita WHERE id = $id";
$result = $conn->query($sql);
$berita = $result->fetch_assoc();

if (!$berita) {
    die("Berita tidak ditemukan");
}

// Proses form update
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $judul = $conn->real_escape_string($_POST['judul']);
    $konten = $conn->real_escape_string($_POST['konten']);
    $tanggal = $conn->real_escape_string($_POST['tanggal']);
    $gambar = $berita['gambar'];
    
    // Handle upload gambar baru
    if (isset($_FILES['gambar']) && $_FILES['gambar']['error'] == UPLOAD_ERR_OK) {
        $target_dir = "uploads/berita/";
        
        // Buat folder jika belum ada
        if (!file_exists($target_dir)) {
            mkdir($target_dir, 0755, true);
        }
        
        $imageFileType = strtolower(pathinfo($_FILES["gambar"]["name"], PATHINFO_EXTENSION));
        
        // Validasi file gambar
        $check = getimagesize($_FILES["gambar"]["tmp_name"]);
        if ($check !== false) {
            $new_gambar = 'berita_' . time() . '.' . $imageFileType;
            $target_file = $target_dir . $new_gambar;
            
            if ($_FILES["gambar"]["size"] > 2000000) {
                $error = "Ukuran file terlalu besar (maksimal 2MB)";
            } elseif (!in_array($imageFileType, ['jpg', 'jpeg', 'png', 'gif'])) {
                $error = "Hanya file JPG, JPEG, PNG & GIF yang diperbolehkan";
            } elseif (move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file)) {
                // Hapus gambar lama jika ada
                if (!empty($berita['gambar']) && file_exists($target_dir . $berita['gambar'])) {
                    unlink($target_dir . $berita['gambar']);
                }
                $gambar = $new_gambar;
            } else {
                $error = "Terjadi kesalahan saat mengupload gambar. Cek izin folder.";
            }
        } else {
            $error = "File yang diupload bukan gambar";
        }
    }
    
    // Update data jika tidak ada error
    if (!isset($error)) {
        $sql = "UPDATE berita SET judul='$judul', konten='$konten', tanggal='$tanggal', gambar='$gambar' WHERE id=$id";
        if ($conn->query($sql)) {
            header("Location: product.php?success=1");
            exit();
        } else {
            $error = "Gagal mengupdate berita: " . $conn->error;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Berita</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .current-image {
            max-width: 300px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            padding: 5px;
        }
    </style>
</head>
<body>
    <div class="container py-4">
        <h2>Edit Berita</h2>
        <a href="berita.php" class="btn btn-secondary mb-3">Kembali</a>
        
        <?php if (isset($error)): ?>
            <div class="alert alert-danger"><?= $error ?></div>
        <?php endif; ?>
        
        <?php if (isset($_GET['success'])): ?>
            <div class="alert alert-success">Berita berhasil diupdate!</div>
        <?php endif; ?>
        
        <form method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="judul" class="form-label">Judul Berita</label>
                <input type="text" class="form-control" id="judul" name="judul" 
                       value="<?= htmlspecialchars($berita['judul']) ?>" required>
            </div>
            
            <div class="mb-3">
                <label for="tanggal" class="form-label">Tanggal</label>
                <input type="date" class="form-control" id="tanggal" name="tanggal" 
                       value="<?= htmlspecialchars($berita['tanggal']) ?>" required>
            </div>
            
            <div class="mb-3">
                <label for="konten" class="form-label">Isi Berita</label>
                <textarea class="form-control" id="konten" name="konten" rows="5" required><?= 
                    htmlspecialchars($berita['konten']) ?></textarea>
            </div>
            
            <div class="mb-3">
                <label for="gambar" class="form-label">Gambar</label>
                
                <?php if (!empty($berita['gambar'])): ?>
                <div class="mb-2">
                    <img src="uploads/berita/<?= htmlspecialchars($berita['gambar']) ?>" 
                         class="current-image" alt="Gambar saat ini">
                    <p class="text-muted">Gambar saat ini</p>
                </div>
                <?php endif; ?>
                
                <input type="file" class="form-control" id="gambar" name="gambar" accept="image/*">
                <small class="text-muted">Biarkan kosong jika tidak ingin mengubah gambar (Max 2MB)</small>
            </div>
            
            <button type="submit" class="btn btn-primary">Update Berita</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>