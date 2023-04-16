<?php

$siswa = [
    ['nama' => 'arif', 'kelas' => '2A', 'goldarah' => 'B'],
    ['nama' => 'hakim', 'kelas' => '2A', 'goldarah' => 'AB'],
    ['nama' => 'jerry', 'kelas' => '2B', 'goldarah' => 'B'],
    ['nama' => 'rochman', 'kelas' => '2C', 'goldarah' => 'A'],
    ['nama' => 'hakkam', 'kelas' => '2B', 'goldarah' => 'O'],
    ['nama' => 'reyhan', 'kelas' => '2D', 'goldarah' => 'B']
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Table</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Gol. Darah</th>
        </tr>

        <!-- Penulisan PHP di HTML -->
        <!-- {} dapat diganti menggunakan : dan endforeach agar lebih mudah dibaca -->
        <?php foreach ($siswa as $key => $value): ?>
        <tr>
            <td><?php echo $value['nama']; ?></td>
            <td><?php echo $value['kelas']; ?></td>
            <td><?php echo $value['goldarah']; ?></td>
        </tr>
        <?php endforeach ?>
    </table>
</body>
</html>