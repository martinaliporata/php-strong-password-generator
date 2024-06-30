<?php session_start();
$_GET["username"]=isset($_GET["username"])?$_GET["username"]: '';
$_GET["password"]=isset($_GET["password"])?$_GET["password"]: '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<main>
    <a href="./login.php">Login</a>
    <h1>Benvenuto: <?php echo $_SESSION["users"]?></h1>
    <a href="./logout.php">Logout</a>
</main>
</body>
</html>