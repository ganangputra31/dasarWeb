<?php

$siswa = [
    ["Alice", 85],
    ["Budi", 92],
    ["Charlie", 78],
    ["Dedi", 64],
    ["Eva", 90]
];


$total = 0;
foreach ($siswa as $data) {
    $total += $data[1];
}
$rata2 = $total / count($siswa);

echo "<h3>Rata-rata Kelas: $rata2</h3>";
echo "<h4>Daftar siswa dengan nilai di atas rata-rata:</h4>";


echo "<ul>";
foreach ($siswa as $data) {
    if ($data[1] > $rata2) {
        echo "<li>$data[0] - $data[1]</li>";
    }
}
echo "</ul>";
?>
