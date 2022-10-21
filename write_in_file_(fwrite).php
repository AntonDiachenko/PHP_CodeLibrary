<?php

# Writes in file by replacing all exisitng text in it. 

$filename = 'C:\XAMPP\htdocs\Session4\Test.txt';

if(file_exists($filename)){
    $f = fopen($filename , "w");
    fwrite($f , 'I am pargol');
    echo "i wrote suceesfully ";
    fclose($f);
}else{
    die("the file does not exist");
}


echo "<br>";
$fs = fopen($filename , "r") or die ("cant find the file"); 
while(!feof($fs)){
    echo fgets($fs);
  
}



?>