<?php
require 'functions.php';
//ambil data dari tabele
$mahasiswa = get("SELECT * FROM tb_mahasiswa");


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
    <h1>Daftar Mahasiswa</h1>
    <a href="add.php">Tambah Data Mahasiswa</a>
    <p>
    <table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>No</th>
        <th>Aksi</th>
        <th>Nama</th>
        <th>Gambar</th>
        <th>NIM</th>
        <th>Jurusan</th>
        <th>Email</th>
    </tr>

    <?php $no = 1; ?>
    <?php foreach($mahasiswa as $row): ?>
    <tr>
        <td><?= $no; ?></td>
        <td>
        <a href="delete.php?id=<?= $row["id_mahasiswa"];?>">delete</a>
        |
        <a href="">update</a>

        </td>
        <td><img src="img/<?=$row ["gambar_mahasiswa"]; ?>" width="50"></td>
        <td><?= $row ["nama_mahasiswa"];?></td>
        <td><?= $row ["nim_mahasiswa"];?></td>
        <td><?= $row ["jurusan_mahasiswa"];?></td>
        <td><?= $row ["email_mahasiswa"];?></td>
    </tr>
        <?php $no++ ?>
    <?php endforeach; ?>
</body>
</html>