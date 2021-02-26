<?php
//koneksi ke database
//(host, user, pw, nama, database)
$db = mysqli_connect("localhost", "root", "", "db_phpdasar");

function get($query){
    global $db;
    $result = mysqli_query($db, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)){
        $rows [] = $row;
    }
    
    return $rows;
}

function add($data){
    global $db;
    //ambil data dari tiap elemen dalam form
    $nama = $data["nama_mahasiswa"];
    $gambar = $data["gambar_mahasiswa"];
    $nim = $data["nim_mahasiswa"];
    $jurusan = $data["jurusan_mahasiswa"];
    $email = $data["email_mahasiswa"];

    //query insert data / masukin data ke table
    $query = "INSERT INTO tb_mahasiswa VALUES (null, '$nama', '$gambar', '$nim', '$jurusan', '$email')";
    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}


function delete($id){
    global $db;
    mysqli_query($db, "DELETE FROM tb_mahasiswa WHERE id_mahasiswa = $id");

    return mysqli_affected_rows($db);

}
?>