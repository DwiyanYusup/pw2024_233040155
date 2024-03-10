<?php
//  1. Membuat Array
$hari = array('Senin', 'Selasa', 'Rabu');
$bulan = ["Januari", "Febuari", "Maret"];
$mhs = ['Dwiyan', 3.3, false];
//  2. Mencetak Array (1)
//  cetak 1 nilai menggunakan index
echo $hari[0];
echo "<br>";
echo $bulan[2];
echo "<br>";
echo $mhs[0];
echo $mhs[1];
echo "<hr>";
//  cetak seluruh isi array
//  var_dump( ) atau print_r( )
//  digunakan untuk debugging
var_dump($hari);
echo "<br>";
print_r($bulan);
echo "<br>";
var_dump($mhs);
echo "<hr>";
//  3. Manipulasi Array
//  Menambah isi array
//  Di belakang : [] atau array_push ()
$hari[] = "Kamis";
$hari[] = "Jum'at";
print_r($hari);
echo "<br>";
array_push($bulan, "April", "Mei");
print_r($bulan);
echo "<br>";
//  Di Awal array: array_unshift( )
array_unshift($mhs, "233040155");
print_r($mhs);
echo "<hr>";
//  Menghapus isi array
//  di belakang: array_pop()
//  di belakang: array_shift()
array_pop($hari);
print_r($hari);
echo "<br>";
array_shift($bulan);
print_r($bulan);
//  4. Mencetak Array (2)
