<?php
session_start();
$_SESSION["username"] = chiamtaget


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./login.php" method="get">
        <label for="username">Please, insert your username</label>
        <input type="submit" value="username" id="username">
        <input type="button" value="username">
    </form>
</body>
</html>