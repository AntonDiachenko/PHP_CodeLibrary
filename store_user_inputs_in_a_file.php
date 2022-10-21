<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="Session4E7.php" method="post">
        UserName :<input type="text" name="uname"></input><br /><br />
        Password :<input type="password" name="pwd"></input><br /><br />
        <input type="submit" value="Login"></input>
        <br><br>

        <?php
# User enters username and password and write these data to the file (if file exists - data are appended, if not - file is created and data are written)

        // To read data from input elements using $_POST
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $uname = $_POST["uname"];
            $password = $_POST["pwd"];
            echo "Welcome " . $uname . "<br/>";
            echo "you get added to the list";
            $filename = 'C:\\XAMPP\\htdocs\\Session4\\names.txt';
            if (file_exists($filename)) {
                // echo "this file is exists";
                $f = fopen("C:\\XAMPP\\htdocs\\Session4\\names.txt", "a") or die("cant do it");
                fwrite($f, "the name is  $uname  and the password is :  $password ");
                fwrite($f, "\r\n");
                fclose($f);
            } else {
                $f = fopen("C:\\XAMPP\\htdocs\\Session4\\names.txt", "w") or die("cant do it");
                fwrite($f, "the name is  $uname  and the password is :  $password ");
                fwrite($f, "\r\n");
                fclose($f);
            }
        }
        ?>
</body>

</html>