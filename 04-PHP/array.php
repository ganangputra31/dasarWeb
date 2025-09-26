<?php


$nilaiSiswa = [
    ['Alice', 85],
    ['Bob', 92],
    ['Charlie', 78],
    ['David', 64],
    ['Eva', 90],
];


$totalNilai = 0;
foreach ($nilaiSiswa as $siswa) {
    $totalNilai += $siswa[1];
}

$rataRata = $totalNilai / count($nilaiSiswa);

echo "Daftar nilai siswa dalam ujian Matematika:<br>";
foreach ($nilaiSiswa as $siswa) {
    echo "Nama: {$siswa[0]}, Nilai: {$siswa[1]} <br>";
}

echo "<br>Rata-rata kelas: {$rataRata} <br><br>";

echo "Siswa dengan nilai di atas rata-rata:<br>";
foreach ($nilaiSiswa as $siswa) {
    if ($siswa[1] > $rataRata) {
        echo "Nama: {$siswa[0]}, Nilai: {$siswa[1]} <br>";
    }
}

?>