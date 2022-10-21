<?php

$servename = "localhost:3308";
$username = "root";
$password = "";

// create connection
$conn = new mysqli($servename,$username,$password);

if ($conn->connect_error){
    die("failed: " . $conn->connect_error);

}
echo "Success";


?>