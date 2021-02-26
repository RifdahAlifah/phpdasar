<?php
//koneksi ke database
$db = mysqli_connect("localhost", "root", "", "db_phpdasar");

//cek apakah tombol submit udah di klik atau belum
if(isset($_POST["submit"])){

    //ambil data dari tiap elemen dalam form
    $nama = $_POST["nama_mahasiswa"];
    $gambar = $_POST["gambar_mahasiswa"];
    $nim = $_POST["nim_mahasiswa"];
    $jurusan = $_POST["jurusan_mahasiswa"];
    $email = $_POST["email_mahasiswa"];

    //query insert data / masukin data ke table
    $query = "INSERT INTO tb_mahasiswa VALUES (null, '$nama', '$gambar', '$nim', '$jurusan', '$email')";
    mysqli_query($db, $query);

    //cek apakah masuk ke database
    var_dump(mysqli_affected_rows($db));
    echo mysqli_error($db);
    

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