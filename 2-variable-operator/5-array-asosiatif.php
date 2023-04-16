<?php
// Array Assosiatif adalah array yang memiliki kata kunci yang kita tentukan sendiri.

// Cara membuat array asosiatif
// $datadiri["nama"] = "Rochman Liulin";
// $datadiri["goldarah"] = "A";
// $datadiri["alamat"] = "Sidoarjo";

$datadiri = [
    "nama" => "Rochman Liulin",
    "goldarah" => "A",
    "alamat" => "Sidoarjo"
];

echo "Nama : " . $datadiri["nama"] . "<br>";
echo "Gol. Darah : " . $datadiri["goldarah"] . "<br>";
echo "Alamat : " . $datadiri["alamat"] . "<br><br>";

// Coba perulangan/looping
$alamat = [
    "rochman" => "Perumtas",
    "arif" => "Tebel Barat",
    "repani" => "Kebonagung"
];

foreach($alamat as $x => $value) {
    echo "Alamat " . $x . " di " . $value;
    echo "<br>";
}
?>