<?php
include_once("config.php");
session_start();

if(isset($_POST['submit'])){
    $email = $_POST['username'];
    $pass = md5($_POST['password']) ;
    $cpass = md5($_POST['cpassword']) ;


    $select = "SELECT * FROM user_form WHERE email='$email' && password='$pass'";
    $result =  mysqli_query($conn , $select);

    if(mysqli_num_rows($result)>0){
        $error = 'user is exist';
    }else{
        if($pass != $cpass){
        $error = 'password is not match';
        }else{
        $insert = "INSERT INTO user_form(email, password) VALUES('$email','$pass')";
        mysqli_query($conn , $insert);
        header('location:login_form.php');
        }
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="form-container">
 <form action="" method="POST">
    <h3 class="title" >Registration : </h3>
        <?php
            if(isset($error)){
                echo '<span class="error-msg">'.$error.'</span>';
            }
        ?>
        <input type = "email" name = "username" placeholder="put email" class = "box" required>
        <input type="password" name="password" placeholder="enter password" class = "box" required>
        <input type="password" name="cpassword" placeholder=" confirm ur pass" class = "box" required>

        <input type="submit" value="Register" name="submit" >
        <a href="login_form.php">Login now</a>
    </form>
    </div>
</body>
</html>