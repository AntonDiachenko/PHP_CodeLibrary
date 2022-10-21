<?php
include_once("config.php");
$result = mysqli_query($mysqli, "SELECT *FROM users order by id ");


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
    <a href="add.php"> ADD NEW USERS </a><br>

    <table>
        <tr>
            <th> NAME</th> <th> Mobile</th><th> Email</th>
        </tr>
          <?php  while($user_data = mysqli_fetch_array($result)){
                echo "<tr>";
                echo "<td>".$user_data['name']."</td>";
                echo "<td>".$user_data['mobile']."</td>";
                echo "<td>".$user_data['email']."</td>";
                echo "<td><a href = 'edit.php?id=$user_data[id]'>EDIT</a> | <a href = 'delete.php?id=$user_data[id]'>Delete</a>";
            }

            ?>
        
    </table>

</body>
</html>