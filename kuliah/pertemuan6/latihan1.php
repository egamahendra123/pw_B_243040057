<?php
//array
//variabel yang dapat memiliki banyak nilai
//elemen pada array boleh memiliki tipe data yang berbeda
//pasangan antar key dan value 
//key-nya adalah index,yang di mulai dari 0

//membuat array
//cara lama
$hari = array("senin", "selasa", "Rabu");
//cara baru
$bulan = ["januari","Februari","maret"];
$arr1 = [100, "teks", "true"];

//menampilkan array
//var_dump() / print_r()
var_dump($hari);
echo "<br>";
print_r($bulan);
echo"<br>";

//menampilkan 1 elemen pada Array
echo $arr1[0];
echo "<br>";
echo $bulan[1];

//menampilkan elemen baru pada array
var_dump($hari);
$hari[] = "kamis";
$hari[] = "jumat";
echo "<br>";
var_dump($hari);

?>