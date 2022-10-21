<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment1</title>

    <style>
        .error {
            color: red;
        }

        fieldset {
            width: 300px;
        }

        legend {
            font-weight: bold;
        }

        #tableDOB,
        #tableGender,
        #tableDegree {
            width: 220px;
        }

        #tableDOB th {
            font-weight: lighter;
        }
    </style>
</head>

<body>

    <?php
    $name = "";
    $nameErr = "";

    $bloodGroup = "";
    $bloodErr = "";

    $email = "";
    $emailErr = "";

    $date = "";
    $month = "";
    $year = "";
    $dobErr = "";

    $gender = "";
    $genderErr = "";

    $degree = "";
    $degreeErr = "";

    // NAME
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if (empty($_POST["name"])) {
            $nameErr = "* please enter a name";
        } else {
            $name = $_POST["name"];
            if (str_word_count($name) < 2) {
                $nameErr  = "* please enter the valid name";
            } else {
                if (!preg_match("/^[a-zA-Z]+(?:\s[a-zA-Z-']+)$/", $name)) {
                    $nameErr  = "* please enter the valid name";
                }
            }
        }
    }

    // EMAIL    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if (empty($_POST["email"])) {
            $emailErr = "* the field cannot be empty";
        } else {
            $email = $_POST["email"];
            if (!preg_match("/^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/", $email)) {
                $emailErr = "* please enter the valid email";
            }
        }
    }

    // DOB
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if ((empty($_POST["date"])) || (empty($_POST["month"])) || (empty($_POST["year"]))) {
            $dobErr = "the fields cannot be empty";
        } else {
            $date = $_POST["date"];
            $month = $_POST["month"];
            $year = $_POST["year"];
            if ((!preg_match("/[0-9]/", $date)) || (!preg_match("/[0-9]/", $month)) || (!preg_match("/[0-9]/", $year))) {
                $dobErr = "* date must include numbers only";
            } else {
                if (($date < 1 || $date > 31) || ($month < 1 || $month > 12) || ($year < 1953 || $month > 1998)) {
                    $dobErr = "* please enter valid date";
                }
            }
        }
    }


    // GENDER
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if (empty($_POST["gender"])) {
            $genderErr = "* please select a gender";
        } else {
            $gender = $_POST["gender"];
        }
    }

 // DEGREE
    // if ($_SERVER["REQUEST_METHOD"] == "POST") {

    //     if (empty($_POST["degree"])) {
    //         $degreeErr = "* please check at least 2 boxes";
    //     } else {
    //         $degree = $_POST["degree"];
    //     }
    // }

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        if(isset($_POST['degree'])){
            if(count($_POST['degree']) < 2){
                $degreeErr = "please check at least two";
            }
            else{
                $degree = $_POST['degree'];
            }
        }
    }


    // BLOOD GROUP
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if (empty($_POST["blood_group"])) {
            $bloodErr = "* please select a blood group";
        } else {
            $bloodGroup = $_POST["blood_group"];
        }
    }

    ?>




    <div>
        <form method="post" action="<?php echo ($_SERVER["PHP_SELF"]); ?>">
            <fieldset>
                <legend>NAME</legend>
                <input type="text" name="name" id="name" size="30" />
                <span class="error"><?php echo $nameErr;    ?></span>
                <hr>
                <button type="submit">Submit</button>
            </fieldset>
        </form><br>
    </div>

    <div>
        <form method="post" action="<?php echo ($_SERVER["PHP_SELF"]); ?>">
            <fieldset>
                <legend>EMAIL</legend>
                <input type="email" name="email" id="email" size="30" required />
                <span class="error"><?php echo $emailErr;    ?></span>
                <hr>
                <button type="submit">Submit</button>
            </fieldset>
        </form><br>
    </div>

    <div>
        <form method="post" action="<?php echo ($_SERVER["PHP_SELF"]); ?>">
            <fieldset>
                <legend>DATE OF BIRTH</legend>
                <table id="tableDOB">
                    <tr>
                        <th>dd</th>
                        <th>mm</th>
                        <th>yyyy</th>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <input type="text" name="date" id="date" size="2" />
                            <input type="text" name="month" id="month" size="2" />
                            <input type="text" name="year" id="year" size="6" />
                        </td>
                    </tr>
                </table>
                <span class="error"><?php echo $dobErr;    ?></span>
                <hr>
                <button type="submit">Submit</button>
            </fieldset>
        </form><br>
    </div>

    <div>
        <form method="post" action="<?php echo ($_SERVER["PHP_SELF"]); ?>">
            <fieldset>
                <legend>GENDER</legend>
                <table id="tableGender">
                    <tr>
                        <td>
                            <input type="radio" name="gender" id="male" value="male">
                            <label for="male">Male</label>
                        </td>
                        <td>
                            <input type="radio" name="gender" id="female" value="female">
                            <label for="female">Female</label>
                        </td>
                        <td>
                            <input type="radio" name="gender" id="other" value="other">
                            <label for="other">Other</label>
                        </td>
                    </tr>
                </table>
                <span class="error"><?php echo $genderErr;    ?></span>
                <hr>
                <button type="submit">Submit</button>
            </fieldset>
        </form><br>
    </div>

    <div>
        <form method="post" action="<?php echo ($_SERVER["PHP_SELF"]); ?>">
            <fieldset>
                <legend>DEGREE</legend>
                <table id="tableDegree">
                    <tr>
                        <td>
                            <input type="checkbox" name="degree[]" id="ssc" value="ssc">
                            <label for="ssc">SSC</label>
                        </td>
                        <td>
                            <input type="checkbox" name="degree[]" id="hsc" value="hsc">
                            <label for="hsc">HSC</label>
                        </td>
                        <td>
                            <input type="checkbox" name="degree[]" id="bsc" value="bsc">
                            <label for="bsc">BSc</label>
                        </td>
                        <td>
                            <input type="checkbox" name="degree[]" id="msc" value="msc">
                            <label for="msc">MSc</label>
                        </td>
                    </tr>
                </table>
                <hr>
                <button type="submit">Submit</button>
            </fieldset>
        </form><br>
    </div>


    <div>
        <form method="post" action="<?php echo ($_SERVER["PHP_SELF"]); ?>">
            <fieldset>
                <legend>BLOOD GROUP</legend>
                <select name="blood_group" id="blood_group">
                    <option disabled selected></option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="AB">AB</option>
                    <option value="O">O</option>
                </select>
                <span class="error"><?php echo $bloodErr; ?></span>
                <hr>
                <button type="submit">Submit</button>
            </fieldset>
        </form><br>
    </div>


</body>

</html>