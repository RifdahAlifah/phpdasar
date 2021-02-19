<?php

//operator penggabung string 
//.

$firstName = "Rifdah";
$lastName = "Alifah";

echo $firstName . " " . $lastName;
echo "<p>";


//operator aritmarika
//+ - * / %
$x = 10;
$y = 15;
echo "Hasil dari $x + $y = ";
echo $x + $y;
echo "<br>";

echo $x - $y;
echo "<br>";

echo $x * $y;
echo "<br>";

echo $x / $y;
echo "<br>";

//operator assignment -> langsung panggil variable nya 
//= += -= *= /= %= .=
$x = 1;
$x -= 5;
echo $x;
echo "<br>";

$nama = "farah";
$nama .= " ";
$nama .= "kamilia";
echo $nama;
echo "<br>";
var_dump ($nama);
echo "<p>";

//operator perbandingan //engga ngebaca tipe data
// < > <= >= == !=
//var dump utk debuging -> cek kodingan (klo mau dipub)
var_dump(1 == "1");
echo "<br>";

//operator identitas //ngebaca tipe data
// === !===
var_dump(1 === "1")



?>