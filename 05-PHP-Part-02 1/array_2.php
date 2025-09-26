<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Dosen</title>
    <link rel="stylesheet" href="style1.css"> 
</head>
<body>

<h2>Data Dosen</h2>

<?php
    $Dosen = [
        'nama' => 'Elok Nur Hamdana',
        'domisili' => 'Malang',
        'jenis_kelamin' => 'Perempuan'
    ];

    echo "<table>";
    echo "<tr><th>BIODATA</th><th>KETERANGAN</th></tr>";
    echo "<tr><td>Nama</td><td>{$Dosen['nama']}</td></tr>";
    echo "<tr><td>Domisili</td><td>{$Dosen['domisili']}</td></tr>";
    echo "<tr><td>Jenis Kelamin</td><td>{$Dosen['jenis_kelamin']}</td></tr>";
    echo "</table>";
?>

</body>
</html>
