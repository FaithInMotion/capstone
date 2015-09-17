<!DOCTYPE html>
<html>
<body>

<h2>Login</h2>
<form action="action_page.php">
    Email:<br>
    <input type="text" name="email" value="<?php echo $email;?>">
    <br>
    Password:<br>
    <input type="password" name="password" value="<?php echo $password;?>">
    <br><br>
    <input type="submit" value="Login">
</form>


</body>
</html>
