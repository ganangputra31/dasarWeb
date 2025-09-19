<?php
$nilaiSiswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];

echo "Daftar nilai siswa: <br>";
foreach ($nilaiSiswa as $nilai) {
    echo $nilai . "<br>";
}


sort($nilaiSiswa);

echo "<br>Nilai setelah diurutkan: <br>";
foreach ($nilaiSiswa as $nilai) {
    echo $nilai . " ";
}


$nilaiTengah = array_slice($nilaiSiswa, 2, count($nilaiSiswa) - 4);

echo "<br><br>Nilai yang dihitung (tanpa 2 tertinggi & 2 terendah): <br>";
foreach ($nilaiTengah as $nilai) {
    echo $nilai . " ";
}


$total = array_sum($nilaiTengah);
$rataRata = $total / count($nilaiTengah);

echo "<br><br>Total nilai (setelah mengabaikan 2 tertinggi & 2 terendah): {$total} <br>";
echo "Rata-rata nilai: {$rataRata}";
?>
