<!-- Informasi lebih aman karena tidak terlihat di URL -->
<?php
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil POST</title>
</head>
<body>
    <h1>Selamat Datang, <?php echo strtoupper($nama); ?></h1>
    <h3>Alamat di <?php echo ucwords($alamat); ?></h3>
</body>
</html>