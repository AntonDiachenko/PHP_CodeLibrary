<?php

# Delete a file

$filename = '/Applications/XAMPP/xamppfiles/htdocs/Session4/Test2.txt';

$stat = unlink($filename);
if($stat){
    echo "deleted";
}else{
    echo "I cant";
}




?>