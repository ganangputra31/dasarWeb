<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $errors = array();

    // Validasi Nama
    if (empty($nama)) {
        $errors[] = "Nama harus diisi.";
    }

    // Validasi Email
    if (empty($email)) {
        $errors[] = "Email harus diisi.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Format email tidak valid.";
    }

    // Validasi Password minimal 8 karakter
    if (strlen($password) < 8) {
        $errors[] = "Password minimal 8 karakter.";
    }

    // Jika ada kesalahan validasi
    if (!empty($errors)) {
        echo "<h3 style='color:red;'>Kesalahan Input:</h3>";
        foreach ($errors as $error) {
            echo "<p style='color:red;'>$error</p>";
        }
        echo '<br><a href="html_validation.html">Kembali ke Form</a>';
    } else {
        echo "<h3>Data berhasil dikirim:</h3>";
        echo "Nama: $nama<br>";
        echo "Email: $email<br>";
        echo "Password: (disembunyikan demi keamanan)<br>";
        echo '<br><a href="html_validation.html">Kembali ke Form</a>';
    }
}
?>
