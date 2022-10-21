<?php

# Open and read a file

$filename = 'C:\XAMPP\htdocs\Session4\Test.txt';

$f = fopen($filename , "r") or die ("cant find the file"); 

while(!feof($f)){
    echo fgets($f);
  
}

# ALTERNATIVE WAY TO OPEN AND READ A FILE

// $f = fopen("$filename" , "r");
// if($f){
//     echo "the file is open";
// }else{
//     die("file is not exsist ");
// }

// $content = fread($f , filesize($filename));
// echo $content;
// fclose($f);


?>