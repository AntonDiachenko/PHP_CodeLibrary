<?php
    include_once("config.php");
    session_start();

if(isset($_POST['submit'])){
    $email = $_POST['username'];
    $pass = md5($_POST['password']) ;
    $select = "SELECT * FROM user_form WHERE email='$email' && password='$pass'";
    $result =  mysqli_query($conn , $select);

    if(mysqli_num_rows($result)>0){
        $_SESSION['username'] = $email;
        header('location:index.php');
    }
    else{
        $error = 'Wrong username or password';
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="form-container">
    <form action="" method="POST">
   <?php if(isset($error)){
                echo '<span class="error-msg">'.$error.'</span>';
            }
    ?>
    <h3 class="title" >login : </h3>
        <input type = "email" name = "username" placeholder="put email" class = "box" required>
        <input type="password" name="password" placeholder="enter password" class = "box" required>
        <input type="submit" value="LOGIN" name="submit" >
        <a href="register_form.php">Register now</a>
    </form>
</div>
</body>
</html>