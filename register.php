<?php 
require "function.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <div>
        <h2>REGISTER</h2>
        <form method="post">
            <input type="text" name="username" placeholder="username" />
            <input type="password" name="password" placeholder="password" />
            <button type="submit" name="register" class="btn">Daftar</button>
            <br>
            <br>
            <button type="submit" class="btn"><a href="index.php">Login</a></button>
        </form>
    </div>
</body>

</html>