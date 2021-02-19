<?php
//date()
//untuk menampilkan tanggal dengan format tertentu
date_default_timezone_set("Asia/jakarta");
echo date("l, d M Y");
echo "<br>";
echo date ("H:i:s");
echo "<br>";

//detik
//detik yang sudah berlalu sejak 1 januari 1970
echo time();
echo "<p>";

//menghitung 1000 hari kemudian dari hari ini
echo date("l, d M Y", time()+60*60*24*1000);
echo "<br>";
//menghitung ke belakang
echo date("l, d M Y", time()-60*60*24*100);

//strtotime
//string to time
echo "<p>";
echo date("l", strtotime("8 April 2002"))

?>