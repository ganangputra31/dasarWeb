<?php
if (isset($_FILES['files'])) {
    $allowedExtensions = array("jpg", "jpeg", "png", "gif");
    $maxSize = 3 * 1024 * 1024; // 3 MB
    $uploadDir = "uploads/";

    if (!file_exists($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }

    foreach ($_FILES['files']['name'] as $key => $name) {
        $fileTmp = $_FILES['files']['tmp_name'][$key];
        $fileSize = $_FILES['files']['size'][$key];
        $fileExt = strtolower(pathinfo($name, PATHINFO_EXTENSION));

        if (in_array($fileExt, $allowedExtensions) && $fileSize <= $maxSize) {
            move_uploaded_file($fileTmp, $uploadDir . $name);
            echo "✅ $name berhasil diunggah.<br>";
        } else {
            echo "❌ $name gagal diunggah (format/ukuran tidak valid).<br>";
        }
    }
}
?>
