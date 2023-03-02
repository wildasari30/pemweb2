<?php
$arrayBuah = ["Jeruk", "Mangga", "Pisang", "Apel"];

// mengurutkan nilai suatu array
sort($arrayBuah);

// menghapus nilai yang paling akhir
array_pop($arrayBuah);

// menghapus seluruh isi variabel
// menghapus suatu variabel dengan menabhkan id
unset($arrayBuah [2]);

// menambah isi variabel
array_push($arrayBuah, "Durian");

//menghapus nilai paling awal
array_shift($arrayBuah);

// menambahkan array di paling depan
array_unshift($arrayBuah, "Semangka");

$arrayBuah[0] = "Manggis";
foreach($arrayBuah as $buah){
    echo $buah . "<br>";
}
