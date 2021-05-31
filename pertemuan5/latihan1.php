<?php 
//array
//variabel yg dpt memiliki banyak nilai
//elemen pada array blh memilliki tipe data yg berbeda
//pasangan antara key dan  value
//key-nya adalah index, yang dimulai dari 0

//cara lama
$hari = array("senin", "selasa", );

//cara baru
$bulan = ["januari", "februari", "maret"];
$arr1 = [123, "dhilah", true];

//menampilkan array
//var_dump() / print_r()
// var_dump($arr1);
// echo "<br>";
// print_r($hari);
// echo "<br>";

//menampilkan satu elemen pada array
// echo $bulan[1];

//menambahkan elemen baru pada array
var_dump($hari);
$hari[] = "rabu";
echo "<br>";
var_dump($hari);
?>