<!-- 
    Pada saat tombol diklik, maka form akan mengirimkan data-data yang sudah diinput oleh pengguna dalam bentuk array.

    Catatan
    1. Array yang dihasilkan tersebut memuat nama kunci beserta value, nama kunci berasal dari name di input form
    2. value berisi data yang diinput oleh pengguna
    3. cara memanggil array dengan semua data yang dikirim yaitu dengan cara print_r($_POST) atau print_r($_GET), pemanggilan harus disesuaikan dengan metode yang dipakai, misal menggunakan metode post maka pemanggilannya menjadi $_POST.
-->

<?php
if(!empty($_POST['proses']))
{
    print_r($_POST);
}
?>
<form action="" method="post">
Nama: <input type="text" name="nama">
<br><br>
Alamat: <textarea name="alamat" rows="8" col="200"></textarea>
<br><br>
Program Studi :
<select name="program_studi">
  <option value="SI">Sistem Informasi</option>
  <option value="TI">Teknik Informatika</option>
  <option value="MI">Manajemen Informatika</option>
</select>
<br><br>
<input type="submit" name="proses" value="submit">
</form>