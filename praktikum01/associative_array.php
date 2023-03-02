<?php
$profileArray = [
    "nama"=> "Wilda", 
    "kelas" => "TI11"
];
echo $profileArray["nama"] . "<br>";
echo $profileArray["kelas"];


echo "";

$profileMultiArray =[
    [
    "nama" => "wilda",
    "semester" => "2"
    ], [ "nama" => "sania",
    "semester" => "2"
    ]
];
foreach($profileMultiArray as $profile){
    echo $profile['nama'] . "<br>";
    echo $profile['semester'] . "<br>";
}