<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form method="POST"  enctype="multipart/form-data">
        <label>Selected file : </label>
        <input type="file" name="fileToUpload">
        <input type="submit" value="upload any" name="submit">
    </form>


<?php

# Uploads the file and moves it to another folder  

if(isset($_POST["submit"])){


    $target_path = "C:\Users\anton\Desktop\TEST";  
    $test = $target_path.basename($target_path).PHP_EOL;
    $target_path=$target_path.basename($_FILES['fileToUpload'] ['name'] ); 

    echo $test;

// check if file is an image
    $check = getimagesize($_FILES['fileToUpload'] ['tmp_name']);
    if($check !== false){
        echo "file is image";

    }
    else{
        echo "file is not an image";
    }

// check file size    
    if($_FILES['fileToUpload']["size"]>500000){
        echo "size is big";
    }
    else{
        echo "size is ok";
    }

// move the file to the destination folder
    if(move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_path ))
    {
        echo "GOOd";
    }
    else{
        echo "Bad";
    }

// display file data
    echo "Filename: " . $_FILES['fileToUpload']['name']."<br>";
    echo "Type : " . $_FILES['fileToUpload']['type'] ."<br>";
    echo "Size : " . $_FILES['fileToUpload']['size'] ."<br>";
    echo "Temp name: " . $_FILES['fileToUpload']['tmp_name'] ."<br>";
    echo "Error : " . $_FILES['fileToUpload']['error'] . "<br>";
}



?>

</body>
</html>