<?php
    for($i = 1; $i <= 100; $i++){
        echo "$i <br>" ;
    }

    echo "<br>";
?>



<?php
date_default_timezone_set("Asia/jakarta");
$jam = date("H:i");

if ($jam > "04.30" && $jam < "06.00"){
    $waktu = "Subuh";
}elseif ($jam >= "12.00" && $jam < "15.30"){
    $waktu = "Dzuhur";
}elseif ($jam >= "15.30" && $jam < "18.00"){
    $waktu = "Ashar";
}elseif ($jam >= "18.00" && $jam < "19.30"){
    $waktu = "Maghrib";
}elseif ($jam >= "19.30" && $jam < "24.00"){
    $waktu = "Isya";
}else{
    $waktu = "selain dari waktu shalat 5 waktu";
}

echo "Saat ini anda memasuki waktu shalat $waktu";
echo "<p>";
?>

<?php

$nilai = 85;
if ($nilai > 70 && $nilai <= 80 ){
    $nilai = "C" ;
}elseif ($nilai >= 80 && $nilai <= 90){
    $nilai = "B";
}elseif ($nilai >= 90 && $nilai <= 100){
    $nilai = "A";
}else{
    $nilai = "tidak ada nilai";
}

echo "Selamat, nilai ujian Matematika kamu $nilai"

?>


