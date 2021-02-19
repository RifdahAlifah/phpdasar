<?php

//Array Numeric (harus sesuai index)
$mahasiswa = [
    ["Rifdah", "02839475", "Teknik Informatika", "rifdahalifah@gmail.com"],
    ["Rachel", "02834535", "Teknik Informatika", "rachelannisa@gmail.com"],
    ["Farah", "0286346", "Teknik Informatika", "farahkamilia@gmail.com"]
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
        <li>Nama : <?= $m[0]?> </li>  
        <li>NIM : <?= $m[1]?> </li>    
        <li>Jurusan : <?= $m[2]?> </li>   
        <li>Email : <?= $m[3]?> </li>    
    </ul>
    <?php endforeach;?>
</body>
</html>