<?php

// Contoh 1
// $warna = "biru";
// $ukuran = "l";

// $biaya = 80000;
// $biaya_tambahan = 15000;

// Pengecekan untuk ukuran XL dengan warna kain merah, dikenakan biaya tambahan
// if($warna == "merah" && $ukuran == "XL") {
//     echo "Total harga " . ($biaya + $biaya_tambahan);
// } else {
//     echo "Total harga " . $biaya;
// }

// Pengecekan untuk ukuran XL atau warna kain merah, dikenakan biaya tambahan
// if($warna == "merah" || $ukuran == "XL") {
//     echo "Total harga " . ($biaya + $biaya_tambahan);
// } else {
//     echo "Total harga " . $biaya;
// }


// Contoh 2
// $ukuran = 'XL';
// $warna	= 'biru';
// $biaya	= 70000;
// if($ukuran=='XL' && $warna=='merah')
// {
//     $biaya_tambahan	= 5000;
//     $total_biaya	= $biaya+$biaya_tambahan;
//     echo "Biaya yang dikenakan adalah ".$total_biaya;
// }
// else
// {
//     echo "Biaya yang dikenakan adalah ".$biaya;
// }


// Contoh 3
$tujuan = 'Surabaya';
$harga	= 100000;
$diskon	= 10000;

if($tujuan=='Surabaya' || $tujuan=='Malang')
{
    $harga	= $harga-$diskon;
    echo "Harga tiket adalah ".$harga;
}
else
{
	 echo "Harga tiket adalah ".$harga;
}

?>