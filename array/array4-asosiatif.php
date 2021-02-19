<?php

//Array Asosiatif (ga berdasarkan index / key nya berupa string) => cocok untuk array didalam array
$mahasiswa = [
    ["nama" => "Rifdah", 
    "nim" => "02839475",
    "jurusan" => "Teknik Informatika",
    "email" => "rifdahalifah@gmail.com"],

    ["nim" => "02834535",
    "nama" => "Rachel",
    "jurusan" => "Teknik Informatika",
    "email" => "rachelannisa@gmail.com"],

    ["jurusan" => "Teknik Informatika",
    "nama" => "Farah",
    "nim" => "0286346",
    "email" => "farahkamilia@gmail.com"]
];

//manggil farah
// echo $mahasiswa[2][0]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach($mahasiswa as $m):?>
    <ul>
        <li>Nama : <?= $m["nama"]?> </li>  
        <li>NIM : <?= $m["nim"]?> </li>    
        <li>Jurusan : <?= $m["jurusan"]?> </li>   
        <li>Email : <?= $m["email"]?> </li>    
    </ul>
    <?php endforeach;?>
</body>
</html>