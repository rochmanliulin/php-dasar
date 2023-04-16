<!-- Contoh PHP di dalam HTML -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MIX PHP</title>
</head>
<body>
    <?php
        $nama = "Rochman";
        $admin = "admin";
    ?>

    <h1>Selamat Datang, <?php echo $nama ?></h1>
    <h2>Tingkat User : <?php echo $admin ?></h2>
</body>
</html>

<!-- Contoh HTML di dalam PHP -->
<?php
    $nama = "<h1>Rochman Liulin</h1>";
    $alamat = "Sidoarjo";

    echo $nama;
    echo "<br>";
    echo $alamat;
?>

<!-- Contoh MIX -->
<?php 
    $nama	="<h2>Siswa Codepolitan</h2>"; 
    $alamat	="<h2>Bandung</h2>";
?>
<html>
<body>
<h1>Selamat Datang</h1><br>
<?php echo $nama; ?><br>
<?php echo $alamat; ?>
</body>
</html>