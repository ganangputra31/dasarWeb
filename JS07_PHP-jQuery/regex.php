<?php
$pattern = '/[a-z]/'; // Cocokkan huruf kecil.
$text = 'This is a Sample Text.';

if (preg_match($pattern, $text)) {
    echo "Huruf kecil ditemukan!<br>";
} else {
    echo "Tidak ada huruf kecil!<br>";
}

$pattern = '/[0-9]+/'; // Cocokkan satu atau lebih digit
$text = 'There are 123 apples.';

if (preg_match($pattern, $text, $matches)) {
    echo "Cocokkan: " . $matches[0] . "<br>";
} else {
    echo "Tidak ada yang cocok!<br>";
}

// $pattern = '/apple/';
// $replacement = 'banana';
// $text = 'I like apple pie.';
// $new_text = preg_replace($pattern, $replacement, $text);
// echo $new_text . "<br>"; // Output: "I like banana pie."

// $pattern = '/apples?/'; // "s" boleh muncul 0 atau 1 kali
// $text = 'There is one apple and some apples.';

// if (preg_match_all($pattern, $text, $matches)) {
//     echo "Kecocokan ditemukan: " . implode(", ", $matches[0]) . "<br>";
// } else {
//     echo "Tidak ada yang cocok!<br>";

$pattern = '/a{2,4}/'; // Huruf 'a' muncul 2 sampai 4 kali berturut-turut
$text = 'a aa aaa aaaa aaaaa';

if (preg_match_all($pattern, $text, $matches)) {
    echo "Kecocokan ditemukan: " . implode(", ", $matches[0]) . "<br>";
} else {
    echo "Tidak ada yang cocok!<br>";
}



$pattern = '/go*d/'; // Cocokkan "god", "good", "goood", dll.
$text = 'god is good.';

if (preg_match($pattern, $text, $matches)) {
    echo "Cocokkan: " . $matches[0] . "<br>";
} else {
    echo "Tidak ada yang cocok!<br>";
}
?>


 
