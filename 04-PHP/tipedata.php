<?php
$a = 10;
$b = 5;
$c = $a + 5;
$d = $b + (10 * 5);
$e = $d - $c;

$nilaiMatematika = 5.1;
$nilaiIPA = 6.7;
$nilaiBahasaIndonesia = 9.3;

$ratarata = ($nilaiMatematika + $nilaiIPA + $nilaiBahasaIndonesia) / 3;



echo "Matematika: {$nilaiMatematika} <br>";
echo "IPA: {$nilaiIPA} <br>";
echo "Bahasa Indonesia: {$nilaiBahasaIndonesia} <br>";
echo "Rata-rata: {$ratarata} <br>";

var_dump($ratarata);
echo"<br><br>";

$apakahSiswaLulus = true;
$apakahSiswaSudahUjian = false;


var_dump($apakahSiswaLulus);
echo "<br>";
var_dump($apakahSiswaSudahUjian);

echo "<br><br>";

$namaDepan = "Ibnu";
$namaBelakang = 'Jakaria';

$namaLengkap = "{$namaDepan} {$namaBelakang}";
$namaLengkap2 = $namaDepan.' '. $namaBelakang;

echo "Nama Depan: {$namaDepan} <br>";
echo 'Nama Belakang:  '. $namaBelakang. '<br>';

echo $namaLengkap;
echo "<br><br>";

$listMahasiswa = ["Wahid Abdullah", "Elmo Bachtiar", "Lendhis Fabri" ];
echo $listMahasiswa[0];

?>
 