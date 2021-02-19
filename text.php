<?php

//untuk mencetak text
echo "Hello World!";

//untuk baris baru
echo "<br>";

//untuk paragraph baru
echo "<p>";

//bisa juga pake petik satu, tapi lebih aman pake peting dua
echo 'Hello World!';
echo "jum'at";

//ini komentar

/*
1. php di dalam html
2. html di dalam php
*/

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- php di dalam html -->
    <h1>Selamat Pagi, <?php echo"Rif";?> </h1>

    <?php echo"<h1>Rifdah</h1>"?>

</body>
</html>