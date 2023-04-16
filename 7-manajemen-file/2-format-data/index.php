<?php

// Debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Ada tiga jenis format data yaitu serialize, XML, JSON
// Jika ingin menyimpan data harus diubah ke bentuk string yang sebelumnya array.
$karyawan	=[
    ['nama'=>'Rochman','alamat'=>'Sidoarjo'],
    ['nama'=>'Arif','alamat'=>'Sidoarjo'],
    ['nama'=>'Hakim','alamat'=>'Sidoarjo']
];

// Contoh JSON
// Format array ke data string
$data = json_encode($karyawan);
// Membuat atau menulis file
file_put_contents('JSON.txt', $data);
// Membaca file
$output = file_get_contents('JSON.txt');
// Format data string ke array
// true -> Agar diubah dari object notation ke array
$hasil = json_decode($output, true);

print_r($hasil);

// Contoh Serialize
$data2 = serialize($karyawan);
// Membuat atau menulis file
file_put_contents('serialize.txt', $data2);
// Membaca file
$output2 = file_get_contents('serialize.txt');
// Format data string ke array
$hasil2 = unserialize($output2);

print_r($hasil2);