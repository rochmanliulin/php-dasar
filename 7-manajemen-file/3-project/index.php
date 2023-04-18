<?php

// Debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);


// Source Code
// Total array yang disiapkan untuk disimpan
$todos = [];

// file_exist -> Untuk pengecekan file, jika ada maka jalankan code
if (file_exists('todo.txt')) {
    // Membaca file todo.txt
    $file = file_get_contents('todo.txt');
    // Mengubah format serialize menjadi array
    $todos = unserialize($file);
}

// Jika ditemukan todo yang dikirimkan dengan method POST
if (isset($_POST['todo'])) {
    $data = $_POST['todo']; // Mengambil data yang di input pada form
    $todos[] = [
        'todo' => $data,
        'status' => 0
    ];
    
    saveData($todos);
}

// Jika ada data dengan nama status, jalankan
if (isset($_GET['status'])) {
    // Bacanya -> array multidimensi todos [key/indeks sesuai checklist user (misal = 0)] dan [status/indeks array multidimensi]
    // Kemudian isi dengan nilai dari $_GET['status'] yang berisi 1
    $todos[$_GET['key']]['status'] = $_GET['status'];
    
    saveData($todos);
}

// Jika ada data dengan nama status, jalankan
if (isset($_GET['hapus'])) {
    unset($todos[$_GET['key']]);
    
    saveData($todos);
}

// Function untuk save data
function saveData($todos) {
    // Membuat atau mengupdate file todo.txt dan reformat array menjadi format serialize
    // Agar updatean status tersimpan dan data diubah
    file_put_contents('todo.txt', serialize($todos));
    // Redirect -> biasanya dilakukan ketika ada aksi atau proses yang dilakukan oleh pengguna yang memerlukan perubahan halaman, seperti saat pengguna berhasil menambahkan data pada form, menghapus data, atau melakukan proses lainnya.
    header('Location:index.php');
}

// Untuk cek perubahan pada array
print_r($todos);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo App</title>
</head>
<body>
    <h1>Todo App</h1>

    <form method="POST">
        <label for="todo">Apa kegiatanmu hari ini ?</label> <br>
        <input type="text" name="todo">
        <button type="submit">Tambah</button>
    </form>

    <ul>
        <!-- Looping agar data dinamis -->
        <!-- 1. Baris 78 -> onclick -> Redirect -> Agar ketika mengklik checkbox, JS mengarahkan ke URL baru dengan query string status dan key -->
        <!-- 2. Baris 78 -> Mengambil indeks/$key dari array $todos dan memasukan ke query key -->
        <!-- 3. Baris 35 -> Buat kondisi untuk mengambil data dari URL / query string kemudian ubah status data yang memiliki index key menjadi 1 -->
        <!-- 4. Baris 79 -> Beri atribut checked ketika status bernilai 1 -->
        <!-- 5. Baris 84 -> Mencoret teks ketika status bernilai 1 begitu sebaliknya -->
        <!-- 6. Baris 78 -> Ubah status setiap kali klik ceklist, agar status tidak terus-menerus bernilai 1 -->
        <?php foreach ($todos as $key => $value): ?>
            <li>
                <input type="checkbox" name="todo" onclick="window.location.href = 'index.php?status=<?php echo ($value['status'] == 1) ? '0' : '1'?>&key=<?php echo $key; ?>'"
                    <?php if ($value['status'] == 1) {
                        // Jika bernilai 1, maka centang
                        echo 'checked';
                    }?>>
                <label><?php
                        // Ternary Operator
                        echo ($value['status'] == 1) ? "<del>" . $value['todo'] . "</del>" : $value['todo'];
                ?></label>
                <a href="index.php?hapus=1&key=<?php echo $key; ?>" onclick="return confirm('Apakah kamu yakin ingin menghapus ?');">hapus</a>
            </li>
        <?php endforeach ?>
    </ul>
</body>
</html>