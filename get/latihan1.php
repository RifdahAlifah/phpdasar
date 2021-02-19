<?php
// lingkup variable (Variable Scope)

$x = 10; //ini variable local

function tampilx(){
    global $x;        //ini variable global (bisa dipanggil seluruhnya)
    echo $x;
}

tampilx();

?>