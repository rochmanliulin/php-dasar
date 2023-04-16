<?php

$kru = ['toni', 'kresna', 'palupi', 'oriza', 'singgih', 'geraldo', 'bagus',
        'farhan', 'agni', 'jalal', 'gunadi', 'pian', 'budi', 'hani', 'bejo'];

foreach ($kru as $key => $nama) {
    echo "Nama : $nama <br>";

    if ($nama == 'farhan') {
        echo "$nama ada di indeks ke-$key <br>";
        // Break -> Menghentikan proses eksekusi program looping
        break;
    }
}

?>