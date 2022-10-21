<?php

// print_r($_SERVER);

$servername = "localhost:3308";
$username = "root";
$password = "";
$dataBaseName = "test";

$connection = new mysqli($servername, $username, $password,$dataBaseName);

if($connection -> connect_error){
    echo "no connection";
}
echo "Good connection";

// $sql = "CREATE DATABASE TEST";
// $connection->query($sql);

# Create table persons
$sql = "CREATE TABLE Persons(PersonID int, 
        LastName varchar(255), FirstName varchar(255), 
        Address varchar(255), City varchar(255)
        )"; 

# check is the table is created
// if($connection->query($sql)===true){
//     echo "table created";
// }else{
//     echo "problem";
// }

# give a message if table exists already
if($connection->query($sql)===true){
    echo "table created";
}else{
    echo $connection->error;
}


# Add a person to the table persons
// $sql2= " INSERT INTO Persons(PersonID, LastName, FirstName, Address, City)
// VALUES(1111, 'Peppa' , 'Pig', '22 Wellington' , 'Montreal'); ";
// if($connection->query($sql2)===true){
//     echo "person added";
// }else{
//     echo "problem";
// }

?>