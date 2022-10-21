<?php

function add(){
    static $x = 0;
    
    //$x++;
    
    echo $x;
    $x++;
}

add();
add();
add();


?>