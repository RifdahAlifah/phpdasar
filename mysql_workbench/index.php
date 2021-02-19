<?php

$db = mysqli_connect("localhost", "root", "", "db_phpdasar");
$result = mysqli_query($db, "SELECT * FROM tb_work_bench");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Work Bench</h1>
    <table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>No</th>
        <th>Nama Produk</th>
        <th>Gambar</th>
        <th>Material Utama</th>
        <th>Warna Pelapis</th>
        <th>Tinggi</th>
        <th>Harga</th>
    </tr>

    <?php $no = 1; ?>
    <?php while($row = mysqli_fetch_assoc($result)): ?>
    <tr>
        <td><?= $no; ?></td>
        <td><?= $row ["nama_produk"];?></td>
        <td><img src="img_workbench/<?=$row ["gambar_produk"]; ?>" width="150"></td>
        <td><?= $row ["material_utama"];?></td>
        <td><?= $row ["warna_pelapis"];?></td>
        <td><?= $row ["tinggi_produk"];?></td>
        <td><?= $row ["harga_produk"];?></td>
    </tr>
        <?php $no++ ?>
    <?php endwhile;?>
</body>
</html>