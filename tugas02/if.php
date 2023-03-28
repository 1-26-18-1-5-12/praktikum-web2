<?php 
$produk = "kulkas";
$harga ;
$jumlah = 8;

if ($produk = "tv") {
    $harga = 4200000;
} elseif ($produk = "kulkas") {
    $harga = 3100000;
} elseif ($produk = "mesin_cuci") {
    $harga = 3800000;
}

echo $harga;

echo $jumlah * $harga;
?>