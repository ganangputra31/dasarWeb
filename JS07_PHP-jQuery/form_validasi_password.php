<!DOCTYPE html>
<html>
<head>
    <title>Form Validasi Password</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
<h1>Form Input dengan Validasi Password</h1>

<form id="myForm">
    <label for="nama">Nama:</label>
    <input type="text" id="nama" name="nama">
    <span id="nama-error" style="color: red;"></span><br>

    <label for="email">Email:</label>
    <input type="text" id="email" name="email">
    <span id="email-error" style="color: red;"></span><br>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password">
    <span id="password-error" style="color: red;"></span><br><br>

    <input type="submit" value="Submit">
</form>

<hr>
<div id="hasil"></div>

<script>
$(document).ready(function() {
    $("#myForm").submit(function(e) {
        e.preventDefault();

        var nama = $("#nama").val();
        var email = $("#email").val();
        var password = $("#password").val();
        var valid = true;

        // Validasi Nama
        if (nama === "") {
            $("#nama-error").text("Nama harus diisi.");
            valid = false;
        } else {
            $("#nama-error").text("");
        }

        // Validasi Email
        if (email === "") {
            $("#email-error").text("Email harus diisi.");
            valid = false;
        } else {
            $("#email-error").text("");
        }

        // Validasi Password (minimal 8 karakter)
        if (password.length < 8) {
            $("#password-error").text("Password minimal 8 karakter.");
            valid = false;
        } else {
            $("#password-error").text("");
        }

        // Kirim data ke server jika semua validasi berhasil
        if (valid) {
            $.ajax({
                url: "proses_validasi_password.php",
                type: "POST",
                data: $(this).serialize(),
                success: function(response) {
                    $("#hasil").html(response);
                }
            });
        }
    });
});
</script>
</body>
</html>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = trim($_POST["nama"]);
    $email = trim($_POST["email"]);
    $password = trim($_POST["password"]);
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

    // Validasi Password
    if (strlen($password) < 8) {
        $errors[] = "Password minimal 8 karakter.";
    }

    // Tampilkan hasil
    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo "<span style='color:red;'>$error</span><br>";
        }
    } else {
        echo "<span style='color:green;'>Data berhasil dikirim!<br>Nama: $nama<br>Email: $email<br>Password: ********</span>";
    }
}
?>
