<!DOCTYPE html>
<html>
<head>
    <title>Form Input dengan Validasi dan AJAX</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <h1>Form Input dengan Validasi dan AJAX</h1>
    <form id="myForm" method="post">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama">
        <span id="nama-error" style="color:red;"></span><br>

        <label for="email">Email:</label>
        <input type="text" id="email" name="email">
        <span id="email-error" style="color:red;"></span><br>

        <input type="submit" value="Submit">
    </form>

    <div id="result"></div> <!-- Tempat menampilkan hasil dari PHP -->

    <script>
    $(document).ready(function() {
        $("#myForm").submit(function(event) {
            event.preventDefault(); // Hentikan pengiriman form biasa

            var nama = $("#nama").val();
            var email = $("#email").val();
            var valid = true;

            // Validasi sederhana
            if (nama === "") {
                $("#nama-error").text("Nama harus diisi.");
                valid = false;
            } else {
                $("#nama-error").text("");
            }

            if (email === "") {
                $("#email-error").text("Email harus diisi.");
                valid = false;
            } else {
                $("#email-error").text("");
            }

            if (valid) {
                // Kirim data ke PHP menggunakan AJAX
                $.ajax({
                    url: "form_validationajax.php",
                    type: "POST",
                    data: { nama: nama, email: email },
                    success: function(response) {
                        $("#result").html(response); // Tampilkan hasil dari PHP
                    },
                    error: function() {
                        $("#result").html("<p style='color:red;'>Terjadi kesalahan saat mengirim data.</p>");
                    }
                });
            }
        });
    });
    </script>
</body>
</html>
