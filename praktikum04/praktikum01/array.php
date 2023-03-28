<?php

// Buat Array
$animals = ["kucing", "harimau", "macan", "singa"];
echo $animals[0] . "<br>";
echo $animals[2] . "<br>";

// untuk array menampilkan semua variable sekaligus
foreach ($animals as $animal) {
    echo $animal . "<br>";
}

// buat array asosiatif
$mahasiswa = ["nama"=>"Althaf", "jurusan"=>"SI", "semester"=>2];
echo $mahasiswa["jurusan"] . "<br>";

foreach ($mahasiswa as $key=>$value){
    echo "keynya adalah" . $key . "value" . $value . "<br>";

}

// Buat Array Multidimensi
$dosen = [
    ["Pak Rojul", "Web"],
    ["Pak Nasrul", "DDP"],
    ["Pak Lukman", "OS"]
];

echo $dosen [0][0]; // akses Pak Rojul
?>