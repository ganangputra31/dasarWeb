<?php
$hargaProduk = 120000;
$diskon = 0;

echo "Harga produk: Rp " . number_format($hargaProduk, 0, ',', '.') . "<br>";

if ($hargaProduk > 100000) {
    $diskon = 0.20 * $hargaProduk;
    echo "Diskon 20%: Rp " . number_format($diskon, 0, ',', '.') . "<br>";
}

$hargaAkhir = $hargaProduk - $diskon;

echo "Harga yang harus dibayar: Rp " . number_format($hargaAkhir, 0, ',', '.');
?>
