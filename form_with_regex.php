<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .error{
            color: red;
        }

    </style>
</head>
<body>

    <?php

        $name = "";
        $nameErr = "";
        $email = "";
        $emailErr = "";
        $website = "";
        $weberr = "";
        $comment = "";
        $commerr = "";
        $gender = "";
        $gendererr = ""; 
        
        if($_SERVER["REQUEST_METHOD"]== "POST"){
           
           
            if(empty($_POST["name"])){
                $nameErr = "please put the name in the place";
            }else{
                $name = $_POST["name"];
                if(!preg_match("/^[a-zA-Z-' ]*$/" , $name)){
                    $nameErr  = "just the letter or white space";
                }
            }

            if(empty($_POST["email"])){
                $emailErr = "please put the email"; 
            }else{
                $email = $_POST["email"];
                if(!preg_match("/^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/" , $email)){
                    $emailErr = "please put the valid email";
                }
            }

            if(empty($_POST["website"])){
                $weberr = "please put the website"; 
            }else{
                $website= $_POST["website"];
                if(!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i" , $website)){
                    $weberr = "please put the valid website";
                }
            }
            if(empty($_POST["comment"])){
                $commerr = "please put the comments"; 
            }else{
                $comment= $_POST["comment"];

        }

        if(empty($_POST["gender"])){
            $gendererr = "please put the gender"; 
        }else{
            $gender= $_POST["gender"];

    }


    }

        ?>




    <!-- <h1>test</h1>
    <a href="<?php echo $_SERVER['PHP_SELF'];?> ">click me </a>
    -->

    <h2>This is my form</h2>
    <form method="POST" action="<?php echo ($_SERVER["PHP_SELF"]);?>">

        <label>FirstName : </label>
        <input type="text" name = "name">
        <span class="error"><?php echo $nameErr;    ?></span>
        <br>

        <label>Email : </label>
        <input type="text" name = "email">
        <span class="error"><?php echo $emailErr;    ?></span>
        <br>

        <label>Website : </label>
        <input type="text" name = "website">
        <span class="error"><?php echo $weberr;  ?></span>
        <br>
        
        <label>comments : </label>
        <textarea  name = "comment"></textarea>
        <span class="error"><?php echo $commerr;  ?></span>
        <br>
        <br>
        <label>Gender : </label>
        <input type="radio" name="gender" value="female">female</input>
        <input type="radio" name="gender" value="male">Male</input>
        <span class="error"><?php echo $gendererr;  ?></span>
        <br>
        <br>
        <input type="submit">

    </form>


    <?php
    
        echo $name ;
        echo $email ;
        echo $website;
        echo $comment;
        echo $gender;

    ?>

</body>
</html>

