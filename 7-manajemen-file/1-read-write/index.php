<?php

// Menampilkan pesan error
error_reporting(E_ALL);
ini_set('display_errors', 1);

$message = "Bismillah, ini adalah hasil membuat file dari PHP :)\n";

// file_put_contents -> Membuat atau menulis file
// "content.txt" -> format file
// $message -> variabel yang akan digunakan
// FILE_APPEND -> menambahkan isi teks baru pada akhir file tanpa menghapus isi teks sebelumnya.
file_put_contents("content.txt", $message, FILE_APPEND);

// file_get_contents -> Membaca file
$isi_file = file_get_contents("content.txt");
echo $isi_file;