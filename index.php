<?php 
require "function.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    <div>
        <h2>LOGIN</h2>
        <form method="post">
            <input type="text" name="username" placeholder="username" />
            <input type="password" name="password" placeholder="password" />
            <button type="submit" name="login" class="btn">Login</button>
            <br>
            <br>
            <button type="submit" class="btn"><a href="register.php">Register</a></button>
        </form>
    </div>
</body>

</html>