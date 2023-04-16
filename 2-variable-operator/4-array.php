<?php
// Membuat array
$angka = array(1, 2, 3, 4, 5);
$buah = ["pisang", "anggur", "apel", "kiwi", "nanas"];

// Menambah data
$angka[] = 6;

// Mengubah/update data
$buah[0] = "semangka";

echo $angka[1];
echo "<br>";

print_r($buah); // Untuk menampilkan seluruh elemen array beserta nomor indexnya
echo "<br>"; // Untuk menampilkan seluruh elemen array beserta nomor indexnya dan tipe data array

var_dump($buah);
?>