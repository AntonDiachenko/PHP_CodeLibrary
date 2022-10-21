<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="<?php echo($_SERVER["PHP_SELF"]);?>">
        FirstName : <input type="text" name="fname"></input><br/><br/>
        LastName : <input type="text" name="lname"></input><br/><br/>
        <input type="submit" value="Login"></input>
    </form>
</body>
</html>


<?php

       // To read data from input elements using $_POST
        
       if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $fname = "";
        $lname = "";
        $fname = $_POST["fname"];
        $lname = $_POST["lname"];

        $servername = "localhost:3308";
        $username = "root";
        $password = "";
        
        $connection = new mysqli($servername,$username,$password);
        
         $sql = "CREATE DATABASE login";
         $connection->query($sql);
        
        
        $dataBaseName = "login";
        
        $con = new mysqli($servername,$username,$password,$dataBaseName);
        
        $sql2 = " CREATE TABLE log( fname varchar(255), lname varchar(255))";

             if($con-> query($sql2)===true){
                 echo "table created";
             }else{
               echo $connection->error;
             }
        
        $sql3 =" INSERT INTO  log ( fname , lname ) VALUES ('$fname','$lname');  ;" ;
        
        if ($con->query($sql3) === TRUE) {
            echo "New record created successfully";
          } else {
            echo "Error: " . $sql3 . "<br>" . $con->error;
          }
          
          $con->close();
            
        }
        // To display data
        // echo "Welcome ".$uname."<br/>";
        // echo "Your password is ".$password;

?>