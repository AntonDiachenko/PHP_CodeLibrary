<?php

# Create a file and write in it

$f = fopen("C:\XAMPP\htdocs\Session4\Test2.txt","w") or die("cant do it");

fwrite($f , "heloooo");

fclose($f);



?>