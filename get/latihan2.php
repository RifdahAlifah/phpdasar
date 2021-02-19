<?php
// superglobal variable 

// var_dump($_SERVER)

//$_GET
// $_GET["nama"] = "rifdah";
// var_dump($_GET)

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

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    </h1>Daftar Mahasiswa</h1>
    <ul>
    <?php foreach($mahasiswa as $m):?>
        <li> 
        <!-- ngirim data -->
            <a href="latihan3.php?nama= <?= $m["nama"] ?>
            &jurusan=<?= $m["jurusan"]?>
            &email=<?= $m["email"]?>">
            <?= $m["nama"]; ?>
        </li>
    <?php endforeach;?>
    </ul>
</body>
</html>