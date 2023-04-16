<!-- Contoh 2 -->

<!-- 
    $_GET digunakan untuk mengirimkan informasi melalui URL untuk ditampilkan pada halaman web, informasi bisa berupa variabel maupun nilai variabel tersebut.
    
    Informasi yang dikirim melalui metodh GET ini bisa dilihat oleh semua orang, untuk itu disarankan tidak mengirimkan informasi rahasia seperti password melalui method GET.

    Method GET mempunyai batasan data / informasi yang bisa dikirim, yaitu sekitar 2000 karakter.

    GET tidak dapat digunakan untuk mengirim data biner seperti gambar atau dokumen.
    
    localhost/namafolder/namafile.php?varibel1=nilai1&variabel2=nilai2&variabel3=nilai3
    ? -> Sebagai penanda bahwa halaman tersebut telah dikirim datanya
    = -> Deklarasi nilai variable
    & -> Tanda pemisah antar variable
-->

<?php
    $nama = $_GET['nama'];
    $alamat = $_GET['alamat'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil GET</title>
</head>
<body>
    <h1>Selamat Datang, <?php echo strtoupper($nama); ?></h1>
    <h3>Alamat di <?php echo ucwords($alamat); ?></h3>
</body>
</html>