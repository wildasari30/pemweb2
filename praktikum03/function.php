<?php

function hitungUmur($tahunLahir = 2000, $tahunSekarang = 2023)
{
    echo $hitungUmur = $tahunSekarang - $tahunLahir;

}

hitungUmur(2002, 2023);
echo "<br>";
hitungUmur(1990, 2023);
echo "<br>";
hitungUmur(1918, 2023);
echo "<br>";
hitungUmur();

// fungsi ke 2
function greeting($nama)
{
    return "Hai, namaku $nama !";
}
echo greeting("Wilda");