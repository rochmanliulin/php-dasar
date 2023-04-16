<?php

function cetakPesan($nama = '') {
    // Local / Function Scope Variabel
    $alamat = "Sidoarjo";

    // Cara agar menjadikan variabel global dapat digunakan di function scope tanpa membuat parameter
    // Tidak disarankan karena akan menyulitkan kita dalam pengembangan ke depannya.
    // global $nama;

    echo (empty($nama)) ? "Selamat Datang!" : "Selamat Datang, $nama!";
}

// Global Variabel
$nama = "Rochman Liulin";

// Tidak dijalankan karena $alamat function scope variabel
echo $alamat;

// Variabel global dapat digunakan di dalam function tapi harus di passing melalui argument
cetakPesan($nama);


// Noted -> variabel di luar fungsi tidak dapat dipanggil di dalam fungsi, begitu pula sebaliknya, variabel di dalam fungsi tidak akan dapat dipanggil di luar fungsi.