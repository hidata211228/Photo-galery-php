<!DOCTYPE html>
<html>
<head>
    <title>Photo Gallery Mini</title>
</head>
<body>

<h2>Upload Gambar</h2>

<form action="upload.php" method="POST" enctype="multipart/form-data">
    <input type="file" name="foto" required>
    <button type="submit">Upload</button>
</form>

<hr>

<h3>Galeri Gambar:</h3>

<?php
$files = glob("uploads/*.*");
if (count($files) == 0) {
    echo "Belum ada gambar.";
} else {
    foreach ($files as $img) {
        echo "<img src='$img' width='200' style='margin:10px;'>";
    }
}
?>

</body>
</html>