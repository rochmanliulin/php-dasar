<?php

$warna = ['merah', 'biru', 'kuning', 'merah', 'hijau', 'biru', 'merah', 'biru', 'kuning', 'merah', 'hijau', 'biru'];
$jumlah_warna = 0;

// Jumlah elemen array ada 12
for ($i=0; $i < 12; $i++) { 
    if ($warna[$i] == 'biru') {
        $jumlah_warna++;
    }
}

echo "Jumlah warna biru $jumlah_warna";

?>