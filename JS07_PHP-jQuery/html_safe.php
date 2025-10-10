<!DOCTYPE html>
<html>
<head>
    <title>HTML Safe Input dan Validasi Email</title>
</head>
<body>
    <h2>Contoh htmlspecialchars() dan Validasi Email di PHP</h2>

    <form method="post" action="">
        <label for="input">Masukkan teks (coba juga tag HTML):</label><br>
        <input type="text" name="input" id="input" required><br><br>

        <label for="email">Masukkan email Anda:</label><br>
        <input type="text" name="email" id="email" required><br><br>

        <input type="submit" value="Kirim">
    </form>

    <hr>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Ambil input dari form
        $input = $_POST['input'];
        $email = $_POST['email'];

        // Lindungi dari XSS (Cross Site Scripting)
        $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');

        // Menampilkan hasil input teks
        echo "<h3>Hasil Setelah Difilter:</h3>";
        echo "Input Anda: " . $input . "<br>";

        // Validasi email
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Email valid: " . htmlspecialchars($email, ENT_QUOTES, 'UTF-8');
        } else {
            echo "Email tidak valid. Silakan masukkan format email yang benar.";
        }
    }
    ?>
</body>
</html>

