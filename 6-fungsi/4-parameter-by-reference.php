<?php

// &$nama_variabel -> Mengubah nilai parameter sesuai proses yang ada di dalam fungsi.
// Parameter by reference digunakan jika ingin mengubah nilai variabel sesuai hasil fungsi.
function kaliLipat(&$angka) {
    $angka += $angka;
}

$x = 2;

for ($i=0; $i < 5; $i++) { 
    kaliLipat($x);
    echo $x . "<br>";
}