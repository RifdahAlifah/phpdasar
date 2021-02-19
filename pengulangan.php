<?php

// for
/*
for()
didalamnya ada 3
1. inisialisasi = variable awal untuk pengulangan
2. kondisi terminasi = memberhentikan pengulangan
3. increment atau decrement  = menentukan pengulangannya maju atau mundur

*/
for($i = 0; $i < 5; $i++){
    echo "hello world! <br>";
}

for($i = 1; $i <= 100; $i++){
    echo $i ;
}

//while
//kalo kondisinya true, lakukan yang ada didalam kurung kurawal {}
//cek dulu baru jalanin
//kalau kondisi false, ga ke cetak apa2
$r = 0;
while($r < 10){
    echo "Aloha! <br>";
    $r++;
}

//do while
// lakukan hal ini selama kondisinya true
// jalankan dulu, baru cek kondisi
//kalau kondisi false, hanya mencetak 1
$y = 0;
do{
    echo "Hai! <br>";
    $y++;
}while($y < 5);


?>