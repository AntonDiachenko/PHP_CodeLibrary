<?php

# Add text to the existing text in a file

$filename = 'C:\XAMPP\htdocs\Session4\Test.txt';


$f = fopen($filename , "a");//open the stream and put the mode to append

fwrite($f , ' and I am 25 years old');


echo "<br>";
$fs = fopen($filename , "r") or die ("cant find the file"); 
while(!feof($fs)){
    echo fgets($fs);
}


?>