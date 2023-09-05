<?php
$aplikasi[1] = 'gtAkademik';
$aplikasi[2] = 'gtFinansi';
$aplikasi[3] = 'gtPerizinan';
$aplikasi[4] = 'eCampuz';
$aplikasi[5] = 'eOviz';

$indeks = 1;

while (isset($aplikasi[$indeks])) {
    echo "Aplikasi ke-$indeks: " . $aplikasi[$indeks] . "<br>";
    $indeks++;
}

?>