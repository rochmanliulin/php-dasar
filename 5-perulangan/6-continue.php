<?php

$siswa = [
    ['nama' => 'arif', 'kelas' => '2A'],
    ['nama' => 'hakim', 'kelas' => '2A'],
    ['nama' => 'jerry', 'kelas' => '2B'],
    ['nama' => 'rochman', 'kelas' => '2C'],
    ['nama' => 'hakkam', 'kelas' => '2B'],
    ['nama' => 'reyhan', 'kelas' => '2D']
];

foreach ($siswa as $key => $value) {
    if ($value['kelas'] == '2A')
        // continue -> menghentikan proses perulangan, namun hanya 1 iterasi saja yaitu
        // perulangan dengan kondisi bernilai TRUE, lalu melanjutkan perulangan iterasi
        // selanjutnya.
        continue;

    echo "Nama : " . $value['nama'] . "<br>";
    echo "Kelas : " . $value['kelas'] . "<br><br>";
}

?>