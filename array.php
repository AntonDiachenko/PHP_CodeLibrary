<?php

function add($num1 , $num2){
    $add = $num1 + $num2;
    echo $add;
    return $add;
}

add(3.4 , 7);
echo "<br>";

function myarray($John , $Mary , $Richard) {
    $myarray1 = [$John , $Mary , $Richard];
    return $myarray1;
}

$myarray2 = myarray("John " , "Mary" , "Richard");

for ($i = 0 ; $i<3 ; $i++){
    echo $myarray2[$i];
    echo "<br>";
}


?>