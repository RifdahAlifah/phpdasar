<?php
//array
//variable yg dapat memiliki banyak nilai
//elemen pada array boleh memiliki data yang berbeda
//array = pasangan antara key dan value
//key = index, dimulai dari angka 0
$hari = "senin";
$hari = "selasa";

//membuat array
$hari = array ("Senin", "Selasa", "Rabu");

//cara baru, pake []
$bulan = ["Januari", "Februari", "Maret"];
$arr = [123, "text", true];

//mencetak array
//untuk debugging
var_dump($arr);

echo "<p>";
print_r($bulan);

echo "<p>";

echo $bulan[1];
echo "<p>";

//menambahkan elemen baru pada array
$bulan[] = "April";
var_dump($bulan)



?>