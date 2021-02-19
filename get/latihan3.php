<?php
//isset = ngecek variable udah dibikin atau blm 
//cek apakah tidak ada data di $_GET
//ketika belum dibikin maka akan dipaksa pindah ke halaman 2

if( !isset($_GET["nama"]) ||
    !isset($_GET["jurusan"]) ||
    !isset($_GET["email"]) 
    ){

        //redirect = memindahkan ke halaman lain 
        header("Location: latihan2.php");
        exit;

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <li><?=$_GET["nama"]?></li>
        <li><?=$_GET["jurusan"]?></li>
        <li><?=$_GET["email"]?></li>
    </ul>

    <a href="latihan2.php">Back</a>
</body>
</html>