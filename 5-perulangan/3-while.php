<?php

$warna = ['merah', 'biru', 'kuning', 'merah', 'hijau', 'biru', 'merah', 'biru', 'kuning', 'merah', 'hijau', 'biru'];
$jumlah_warna = 0;

// Gunakan ini jika ingin menjalankan minimal 1x tanpa cek kondisi terlebih dahulu
$i = 0;
do {
    if ($warna[$i] == 'biru') {
        $jumlah_warna++;
    }
    $i++;
} while ($i < 12);

echo "Jumlah warna biru $jumlah_warna <br>";

// Gunakan ini ketika ingin mengecek kondisi bernilai true or false
$jumlah_warna = 0;
$i = 0;
while ($i < 12) {
    if ($warna[$i] == 'kuning') {
        $jumlah_warna++;
    }
    $i++;
}
echo "Jumlah warna kuning $jumlah_warna";

?>