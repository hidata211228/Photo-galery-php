<?php

if (isset($_FILES['foto'])) {

    $nama = $_FILES['foto']['name'];
    $tmp  = $_FILES['foto']['tmp_name'];

    // Folder tujuan
    $tujuan = "uploads/" . basename($nama);

    // Pindahkan file
    if (move_uploaded_file($tmp, $tujuan)) {
        echo "<p>✔ Gambar berhasil di-upload!</p>";
    } else {
        echo "<p>❌ Gagal upload!</p>";
    }

    echo "<a href='index.php'>Kembali</a>";
}
?>