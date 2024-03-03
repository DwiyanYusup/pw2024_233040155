<?php

echo "<h4>Menghitung Luas Lingkaran</h4>";
function HitungLuasLingkaran($r)
{
    $luas = 3.14 * $r * $r;
    echo "Jari-jari = $r" . " cm.<br>";
    echo "Luas Lingkaran = $luas" . "cm²";
}
HitungLuasLingkaran(10);

echo "<hr>";

echo "<h4>Menghitung Keliling Lingkaran</h4>";
function HitungKelilingLingkaran($r)
{
    $keliling = 3.14 * 2 * $r;
    echo "Jari-jari = $r" . " cm.<br>";
    echo "Keliling Lingkaran = $keliling" . "cm";
}
HitungKelilingLingkaran(20);
