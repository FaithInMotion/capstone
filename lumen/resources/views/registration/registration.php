<!DOCTYPE HTML>
<html>
<head>
    <style>
        .error {color: #FF0000;}
    </style>
</head>
<body>

<?php
// define variables and set to empty values
$disError = $nameErr = $emailErr = $passwordErr = $birthErr = "";
$disname = $name = $email = $password = $birthdate = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["displayname"])) {
    $disErr = "Display name is required";
} else {
    $disname = test_input($_POST["displayname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z0-9]+$/",$disname)) {
        $disErr = "Only letters and white space allowed";
    }
}
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = test_input($_POST["name"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
            $nameErr = "Only letters and white space allowed";
        }
    }

    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
        // check if e-mail address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invaild email must contain an @ symbol";
        }
    }

    if (empty($_POST["password"])) {
        $passwordErr = "Password is required";
    } else {
        $password = test_input($_POST["password"]);
        // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
        if (!preg_match("/^[a-zA-Z0-9]+$/", $password)) {
            $passwordErr = "Must contain at least one number";
        }
        if(strlen($password) < 8){
            $passwordErr = "Must be at least 8 characters";
        }
    }

    if (empty($_POST["birthdate"])) {
        $birthErr = "Birthdate is required";
    } else {
        $birthdate = test_input($_POST["birthdate"]);

    }


}
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<h2>Register</h2>
<p><span class="error">* required field.</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["2015_08_31_212536_create_users_table"]);?>">
    Display Name: <input type="text" name="displayname" value="<?php echo $disname;?>">
    <span class="error">* <?php echo $disErr;?></span>
    <br><br>
    Name: <input type="text" name="name" value="<?php echo $name;?>">
    <span class="error">* <?php echo $nameErr;?></span>
    <br><br>
    E-mail: <input type="text" name="email" value="<?php echo $email;?>">
    <span class="error">* <?php echo $emailErr;?></span>
    <br><br>
    Password: <input type="password" name="password" value="<?php echo $password;?>">
    <span class="error">*<?php echo $passwordErr;?></span>
    <br><br>
    Birthdate: <input type="date" name="birthdate" value="<?php echo $birthdate;?>">
    <span class="error">*<?php echo $birthErr;?></span>
    <br><br>
    <input type="submit" name="submit" value="Submit">
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $disname;
echo "<br>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $password;
echo "<br>";
echo $birthdate;
?>

</body>
</html>