<?php

$alas = 10;
$tinggi = 25;

function luasSegitiga($alas, $tinggi) {
    $luas = $alas * $tinggi / 2;

    // return -> Mengembalikan output (hasil proses dari sebuah fungsi) agar dapat digunakan di luar fungsi.
    return $luas;
}

function luasJajarGenjang($alas, $tinggi) {
    $luas = ($alas + $tinggi) * 2;

    // return -> Mengembalikan output (hasil proses dari sebuah fungsi) agar dapat digunakan di luar fungsi.
    return $luas;
}

$luasSegitiga = luasSegitiga($alas, $tinggi);
$luasJajarGenjang = luasJajarGenjang($alas, $tinggi);

echo "Luas segitiga dengan $alas dan $tinggi adalah $luasSegitiga <br>";
echo "Luas jajargenjang dengan $alas dan $tinggi adalah $luasJajarGenjang <br>";
