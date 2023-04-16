<?php
$pesan = null;

$datadiri = [
    "nama" => "Rochman",
    "goldarah" => null,
    "alamat" => "Sidoarjo"
];

echo $datadiri["status"] ?? null; // ?? -> coalescing, apabila $datadiri["status"] tidak ditemukan. Maka tampilkan nilai null
?>