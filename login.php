<?php
session_start();
require_once __DIR__ . '/array.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP strong password generator</title>
</head>
<body>
    <main>
        <form action="./index.php" method="get">
            <section>
                <label for="username">Please, insert your username</label>
                <input type="text" name="username" id="username">
            </section>
            <section>
                <label for="password">Please, insert your password</label>
                <input type="text" name="password" id="password">
            </section>
            <section>
                <input type="submit" value="submit">
            </section>
        </form>
    </main>
</body>
</html>