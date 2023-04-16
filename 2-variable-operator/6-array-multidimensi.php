<?php
// Array multidimensi adalah sebuah array yang memiliki satu atau lebih array.
// Untuk array dua dimensi, kita membutuhkan dua indeks untuk memilih elemen.
// Sedangkan untuk array tiga dimensi, kita membutuhkan tiga indeks untuk memilih elemen
$karnivora = ["singa", "macan", "serigala"];
$herbivora = ["kuda", "sapi", "kambing"];
$omnivora = ["ayam", "monyet", "babi"];

$binatang = [
    "karnivora" => $karnivora,
    "herbivora" => $herbivora,
    "omnivora" => $omnivora
];

echo $binatang["karnivora"][2];

// Coba perulangan/looping
$mahasiswa = [
    ["Rochman", 21, "Pria"],
    ["Arif", 20, "Pria"],
    ["Hakim", 20, "Pria"]
];

for($baris = 0; $baris < 3; $baris++) {
    echo "<p><b>Baris No: $baris</b></p>";
    echo "<ul>";
    for($kolom = 0; $kolom < 3; $kolom++) {
        echo "<li>" . $mahasiswa[$baris][$kolom] . "</li>";
    }
    echo "</ul>";
}
?>