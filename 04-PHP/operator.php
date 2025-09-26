<?php
$a = 10;
$b = 5;

$hasilTambah = $a +  $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a /$b;
$pangkat = $a ** $b;

echo "Nilai a = {$a} <br>";
echo "Nilai b = {$b} <br><br>";

echo "Hasil Penjumlahan (a + b) = {$hasilTambah} <br>";
echo "Hasil Pengurangan (a - b) = {$hasilKurang} <br>";
echo "Hasil Perkalian (a * b) = {$hasilKali} <br>";
echo "Hasil Pembagian (a / b) = {$hasilBagi} <br>";
echo "Hasil Perpangkatan (a ** b) = {$pangkat} <br>";


$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

echo "Nilai a = {$a} <br>";
echo "Nilai b = {$b} <br><br>";

echo "Apakah a sama dengan b? : ";
var_dump($hasilSama);
echo "<br>";

echo "Apakah a tidak sama dengan b? : ";
var_dump($hasilTidakSama);
echo "<br>";

echo "Apakah a lebih kecil dari b? : ";
var_dump($hasilLebihKecil);
echo "<br>";

echo "Apakah a lebih besar dari b? : ";
var_dump($hasilLebihBesar);
echo "<br>";

echo "Apakah a lebih kecil atau sama dengan b? : ";
var_dump($hasilLebihKecilSama);
echo "<br>";

echo "Apakah a lebih besar atau sama dengan b? : ";
var_dump($hasilLebihBesarSama);
echo "<br>";

echo "<br><br>";

$a += $b;
echo "Setelah a += b, nilai a = {$a} <br>";

$a -= $b;
echo "Setelah a -= b, nilai a = {$a} <br>";

$a *= $b;
echo "Setelah a *= b, nilai a = {$a} <br>";

$a /= $b;
echo "Setelah a /= b, nilai a = {$a} <br>";

$a %= $b;
echo "Setelah a %= b, nilai a = {$a} <br>";

echo "<br><br>";

$hasilIdentik =$a === $b;
$hasilTidakIdentik = $a !== $b;

echo "Nilai a = ";
var_dump($a);
echo "<br>";

echo "Nilai b = ";
var_dump($b);
echo "<br><br>";

echo "Apakah a identik dengan b (===) ? : ";
var_dump($hasilIdentik);
echo "<br>";

echo "Apakah a tidak identik dengan b (!==) ? : ";
var_dump($hasilTidakIdentik);
echo "<br>";


?>