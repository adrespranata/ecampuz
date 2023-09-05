<?php
function pembagianBulat($a, $b) {
    $hasil = 0;

    while ($a >= $b) {
        $a -= $b;
        $hasil++;
    }

    return $hasil;
}

// Contoh penggunaan
$angka1 = 7;
$angka2 = 2;
$hasilPembagian = pembagianBulat($angka1, $angka2);
echo "$angka1 : $angka2 menghasilkan output $hasilPembagian </br>";

$angka1 = 8;
$angka2 = 4;
$hasilPembagian = pembagianBulat($angka1, $angka2);
echo "$angka1 : $angka2 menghasilkan output $hasilPembagian";
?>
