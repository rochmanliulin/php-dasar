<?php
// Fungsi digunakan untuk melakukan sebuah proses, pada halaman web, suatu fungsi tidak
// langsung dijalankan, melainkan dijalankan apabila fungsi tersebut dipanggil.
// Kapan membuat fungsi sendiri ? Saat kita hendak melakukan suatu proses yang spesifik namun fungsi yang kita butuhkan belum disediakan oleh PHP.

// Default parameter bisa di isi '' / null / false
function cetakPesan($nama = '') {
    // empty() -> Mengembalikan boolean untuk cek kosong atau ada nilainya
    // Contoh ternary operator
    echo (empty($nama)) ? "Selamat Datang! <br><br>" : "Selamat Datang, $nama! <br><br>";
    
    $kalimat = "Saya suka kamu dan berharap kamu adalah masa depanku :) <br>";

    // str_replace() -> Mengganti kata lama dengan yang baru
    echo str_replace("kamu", "dia", $kalimat);

    // str_word_count() -> Menghitung jumlah kata
    echo "Jumlah kata dalam kalimat diatas : " . str_word_count($kalimat);
}

cetakPesan();