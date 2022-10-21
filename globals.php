<?php

$number = 10;
$str1 = "Pargol";

$x = 15; 
$y = 10;
$z = 0 ; 

//$str3 = "Daniel";

//printf("number of the course is %f and my name is %s", $number , $str);


function sayMyName(){
   global $str1 ;
   $str2 = "Richard";
    echo "I am $str1";
    echo $str2;
}

function sayMyName2(){
    $str3 = "Daniel";
    echo $str3;
    //$GLOBALS[$str3];
}

function add(){

    $GLOBALS ['z'] = $GLOBALS [ 'x' ] + $GLOBALS [ 'y'];
}

add();
echo $z;

// echo $str3;

// sayMyName();






?>