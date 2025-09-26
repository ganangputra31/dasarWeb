<?php
$pesan = "saya ,malagn, sawojajar, kamu, iyo";
# ubah variabel $pesan menjadi array dengan perintah explode
$pesanPerKata = explode(" ", $pesan);
# ubah setiap kata dalam array menjadi kebalikannya
$pesanPerKata = array_map(fn($kata) => strrev($kata), $pesanPerKata);
# gabungkan kembali array menjadi string
$pesan = implode(" ", $pesanPerKata);
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>BOSO MALANG</title>
    <style>
        body {
            background-color: #f0f8ff;
            font-family: Arial, sans-serif;
            text-align: center;
            padding: 50px;
        }
        h1 {
            color: #2c3e50;
            font-size: 36px;
        }
        .hasil {
            font-size: 24px;
            color: #16a085;
            margin-top: 30px;
            padding: 10px;
            background: #ecf0f1;
            display: inline-block;
            border-radius: 8px;
        }
    </style>
</head>
<body>
    <h1>BOSO MALANG</h1>
    <div class="hasil">
        <?php echo $pesan; ?>
    </div>
</body>
</html>
