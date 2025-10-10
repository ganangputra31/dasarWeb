 <?php
   
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $nama  = htmlspecialchars($_POST['nama'], ENT_QUOTES, 'UTF-8');
        $email = htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF-8');

       
        if (empty($nama)) {
            echo "<h3 style='color:red;'>Nama tidak boleh kosong!</h3>";
        }
        
        elseif (empty($email)) {
            echo "<h3 style='color:red;'>Email tidak boleh kosong!</h3>";
        }
       
        elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "<h3 style='color:red;'>Format email tidak valid!</h3>";
        }
        
        else {
            echo "<h3>Hasil Input:</h3>";
            echo "Nama: " . $nama . "<br>";
            echo "Email: " . $email . "<br>";
        }
    }
    ?>

