<!-- Contoh 1 -->
<!-- <?php
    // $nama = $_GET['nama'];
    // $alamat = $_GET['alamat'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar GET</title>
</head>
<body>
    <form>
        <label for="nama">Nama :</label>
        <input type="text" name="nama">

        <label for="alamat">Alamat :</label>
        <input type="text" name="alamat"><br><br>

        <button>Submit</button>
    </form>
    <h1>Selamat Datang, <?php // echo strtoupper($nama); ?></h1>
    <h3>Anda bertempat tinggal di <?php // echo ucwords($alamat); ?></h3>
    <p>Selamat belajar pemrograman dasar PHP.</p>
</body>
</html> -->


<!-- Contoh 2 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar GET</title>
</head>
<body>
    <!-- Kenapa tidak ditulis method="GET" ? -->
    <!-- Karena default method dari form adalah GET -->
    <form action="2-proses.php">
        <label for="nama">Nama :</label>
        <input type="text" name="nama">

        <label for="alamat">Alamat :</label>
        <input type="text" name="alamat"><br><br>

        <button>Submit</button>
    </form>
</body>
</html>