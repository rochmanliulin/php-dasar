<?php

$warna = ['merah', 'biru', 'kuning', 'merah', 'hijau', 'biru', 'merah', 'biru', 'kuning', 'merah', 'hijau', 'biru'];
$jumlah_warna = 0;

// Foreach digunakan untuk mengulang perintah / blok kode program melalui indeks di dalam array dan hanya berfungsi pada array.
// $warna -> array yang dipilih
// $key -> key / indeks array(tidak wajib)
// $value -> value setiap indeks array

// Contoh dengan $key
// foreach ($warna as $key => $value) {
//     echo "Indeks ke-$key => $value <br>";
//     if ($value == 'biru') {
//         $jumlah_warna++;
//     }
// }

// Contoh tanpa $key
foreach ($warna as $value) {
    echo "Warna saat ini $value <br>";
    if ($value == 'biru') {
        $jumlah_warna++;
    }
}
echo "Jumlah warna biru $jumlah_warna <br>";

?>