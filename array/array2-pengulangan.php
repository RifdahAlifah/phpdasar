<?php
//pengulangan pada array
//foreach
$angka = [2, 4, 5, 9, 5, 1, 8, 6, 12, 11];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .kotak{
        width: 50px;
        height: 50px;
        background-color: salmon;
        text-align: center;
        line-height: 50px;
        margin: 3px;
        float: left;
    }
    /*supaya turun kebawah*/
    .clear{clear:both;}
    </style>
</head>
<body>
<!-- div = mengelompokan elemen atau tag-tag agar menjadi satu grup -->
<?php for($x = 0; $x <7; $x++){?>
    <div class="kotak"><?= $angka[$x]; ?></div>
<?php }?>

<div class="clear"></div>
    
<?php for($x = 0; $x < count($angka); $x++):?>
    <div class="kotak"><?= $angka[$x]; ?></div>
<?php endfor;?>

</body>
</html>

<!-- foreach -->
<div class="clear"></div>

<?php foreach($angka as $a):?>
    <div class="kotak"> <?= $a;?> </div>
<?php endforeach;?>    