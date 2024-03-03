<?php
function urutanAngka($angka)
{
    $angka_awal = 1;
    for ($i = 1; $i <= $angka; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo $angka_awal++ . " ";
        }
        echo "<br>";
    }
}

echo urutanAngka(5);
