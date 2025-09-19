<?php
$nilaiNumerik = 92;

if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100) {
    echo "Nilai huruf: A";
} elseif ($nilaiNumerik >= 80 && $nilaiNumerik < 90) {
    echo "Nilai huruf: B";
} elseif ($nilaiNumerik >= 70 && $nilaiNumerik < 80) {
    echo "Nilai huruf: C";
} elseif ($nilaiNumerik < 70) {
    echo "Nilai huruf: D";
}

echo "<br><br>";

$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;

echo "Target jarak: {$jarakTarget} km <br>";
echo "Peningkatan harian: {$peningkatanHarian} km <br><br>";


while ($jarakSaatIni < $jarakTarget) {
    $jarakSaatIni += $peningkatanHarian;
    $hari++;
    echo "Hari ke-{$hari}: total jarak = {$jarakSaatIni} km <br>";
}

echo "<br>Atlet tersebut memerlukan {$hari} hari untuk mencapai jarak {$jarakTarget} kilometer.";

echo "<br><br>";

$jumlahLahan = 10;
$tanamanPerLahan = 5;
$buahPerTanaman = 10;
$jumlahBuah = 0;

echo "Jumlah lahan: {$jumlahLahan} <br>";
echo "Jumlah tanaman per lahan: {$tanamanPerLahan} <br>";
echo "Jumlah buah per tanaman: {$buahPerTanaman} <br><br>";

for ($i = 1; $i <= $jumlahLahan; $i++) {
    $hasilPerLahan = $tanamanPerLahan * $buahPerTanaman;
    $jumlahBuah += $hasilPerLahan;

    echo "Lahan ke-{$i}: menghasilkan {$hasilPerLahan} buah <br>";
}

echo "<br>Jumlah buah yang akan dipanen adalah: {$jumlahBuah} buah";

echo "<br><br>";

$skorUjian = [85, 92, 78, 96, 88];
$totalSkor = 0;

echo "Daftar skor ujian: <br>";
foreach ($skorUjian as $index => $skor) {
    echo "Siswa " . ($index + 1) . " = {$skor} <br>";
    $totalSkor += $skor;
}

$rataRata = $totalSkor / count($skorUjian);

echo "<br>Total skor ujian adalah: {$totalSkor} <br>";
echo "Rata-rata skor ujian adalah: {$rataRata}";

echo "<br><br>";

$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];

echo "Daftar nilai siswa: <br><br>";

foreach ($nilaiSiswa as $index => $nilai) {
    if ($nilai < 60) {
        echo "Siswa " . ($index + 1) . " - Nilai: {$nilai} (Tidak lulus) <br>";
        continue;
    }
    echo "Siswa " . ($index + 1) . " - Nilai: {$nilai} (Lulus) <br>";
}

?>