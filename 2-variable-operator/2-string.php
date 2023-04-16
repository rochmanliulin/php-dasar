<?php
    // Concatenation
    /*
        Menggabungkan string ada dua cara menggunakan tanda "" atau .
        Contoh :
            -"selamat datang, $nama"
            -$pesan . $nama
            -$pesan . ' ' . $nama
    **/

    $nama = strtoupper("rochman");
    $pesan = ucwords("selamat datang, $nama");
    $namaDepan = "rochman";
    $namaBelakang = "liulin";
    $namaLengkap = $namaDepan.$namaBelakang;

    echo $pesan;
    echo "<br>";
    echo $namaLengkap;

?>