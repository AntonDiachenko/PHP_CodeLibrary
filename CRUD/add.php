<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="index.php"> Home </a>
    <form action="add.php" method="POST" name = "form1" >
        <table>
            <tr>
                <td>Name</td>
                <td><input type="text" name = "name"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name = "email"></td>
            </tr>
            <tr>
                <td>Mobile</td>
                <td><input type="text" name = "mobile"></td>
            </tr>
            <tr>
                <td><input type="Submit" name="Submit" value="Add"></td>
            </tr>

        </table>

    </form>



    <?php
        //check if form submitted

        if(isset($_POST['Submit'])){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $mobile = $_POST['mobile'];

            include_once("config.php");
            //$SQL = INSERT INTO users(name , email, mobile ) VALUES ('$name','$email',' $mobile ')
            //$mysqli->query($sql);

            $result = mysqli_query($mysqli , "INSERT INTO users(name , email, mobile ) VALUES ('$name','$email',' $mobile ')");


            echo "users added"; 
            echo  "<a href= 'index.php' >View users</a>";
         
        }
    
    
    
    ?>
    
</body>
</html>