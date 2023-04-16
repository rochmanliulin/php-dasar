<?php
    // Bulit in function -> Fungsi bawaan PHP
    // ucwords() -> Mengubah huruf awal setiap kata menjadi kapital & return value
    // strtoupper() -> Mengubah huruf menjadi kapital & return value
    $nama = strtoupper("rochman liulin");
    // phpinfo(); // No return value

    // User Defined Function (UDF) -> Membuat fungsi sesuai kebutuhan
    function pesan() {
        echo "Haloo... ";
    }
    pesan();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fungsi</title>
</head>
<body>
    <h1>Selamat Datang, <?php echo $nama ?></h1>
</body>
</html>