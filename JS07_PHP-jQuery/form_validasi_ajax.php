<!DOCTYPE html>
<html>
<head>
    <title>Form Validasi dengan AJAX</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
<h1>Form Input dengan Validasi AJAX</h1>

<form id="myForm">
    <label for="nama">Nama:</label>
    <input type="text" id="nama" name="nama">
    <span id="nama-error" style="color: red;"></span><br>

    <label for="email">Email:</label>
    <input type="text" id="email" name="email">
    <span id="email-error" style="color: red;"></span><br>

    <input type="submit" value="Submit">
</form>

<hr>
<div id="hasil"></div>

<script>
$(document).ready(function () {
    $("#myForm").submit(function (e) {
        e.preventDefault(); // Mencegah reload halaman

        // Ambil data form
        var formData = $(this).serialize();

        // Kirim ke server lewat AJAX
        $.ajax({
            url: "proses_validasi_ajax.php",
            type: "POST",
            data: formData,
            success: function (response) {
                $("#hasil").html(response); // Tampilkan hasil validasi di bawah form
            }
        });
    });
});
</script>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = trim($_POST["nama"]);
    $email = trim($_POST["email"]);
    $errors = [];

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

    // Tampilkan hasil
    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo "<span style='color:red;'>$error</span><br>";
        }
    } else {
        echo "<span style='color:green;'>Data berhasil dikirim!<br>Nama: $nama<br>Email: $email</span>";
    }
}
?>
