<?php
require 'functions.php';
//cek apakah tombol submit udah di klik atau belum
if(isset($_POST["submit"])){
    //cek data apakah berhasil masuk atau engga
    if(add($_POST) > 0){
        echo "
            <script>
            alert('data berhasil ditambahkan!');
            document.location.href = 'index.php';
            </script>
        ";
    }else{
        echo "
        <script>
        alert('data gagal ditambahkan!');
        document.location.href = 'index.php';
        </script>
    ";

    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
</head>
<body>
    <h1>Tambah Data Mahasiswa</h1>

    <form action="" method="post">

    <label for="nama_mahasiswa">Nama : </label>
    <input type="text" name="nama_mahasiswa"id="nama_mahasiswa"></input>
    <p>

    <label for="gambar_mahasiswa">Gambar : </label>
    <input type="text" name="gambar_mahasiswa"id="gambar_mahasiswa"></input>
    <p>

    <label for="nim_mahasiswa">NIM : </label>
    <input type="text" name="nim_mahasiswa"id="nim_mahasiswa"></input>
    <p>

    <label for="jurusan_mahasiswa">Jurusan : </label>
    <input type="text" name="jurusan_mahasiswa"id="jurusan_mahasiswa"></input>
    <p>

    <label for="email_mahasiswa">Email : </label>
    <input type="text" name="email_mahasiswa"id="email_mahasiswa"></input>
    <p>

    <button type="submit" name="submit">Tambah Data</button>

    </form>
</body>
</html>