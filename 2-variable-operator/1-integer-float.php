<?php
    $a = 10;
    $b = 6;
    $c = $a / $b;
    $a++; // Increment
    $b--; // Decrement


    // round(variable, jumlah angka dibelakang koma) -> Membulatkan angka, parameter ke-2 optional
    echo round($c, 2);
    echo "<br>";
    echo $a;
    echo "<br>";
    echo $b;
?>