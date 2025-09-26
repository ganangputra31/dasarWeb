<?php

$menu = [
    [ "nama" => "Beranda" ],
    [
        "nama" => "Berita",
        "subMenu" => [
            [
                "nama" => "Wisata",
                "subMenu" => [
                    [ "nama" => "Pantai" ],
                    [ "nama" => "Gunung" ]
                ]
            ],
            [ "nama" => "Kuliner" ],
            [ "nama" => "Hiburan" ]
        ]
    ],
    [ "nama" => "Tentang" ],
    [ "nama" => "Kontak" ]
];

function tampilkanMenuBertingkat(array $menu) {
    echo "<ul>";
    foreach ($menu as $item) {
        echo "<li>" . $item['nama'];
        
        // ✅ Periksa apakah ada subMenu dan panggil fungsi lagi (rekursif)
        if (isset($item['subMenu'])) {
            tampilkanMenuBertingkat($item['subMenu']);
        }
        
        echo "</li>";
    }
    echo "</ul>";
}

// ✅ Panggil fungsi di luar setelah dideklarasikan
tampilkanMenuBertingkat($menu);

?>
