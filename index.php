<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <h1>
            Pagina profilo
        </h1>
    </header>
    <main>
        <?php if(isset($_SESSION["logged"])) {?>
            <h2>
                Benvenuto <?php echo $_SESSION["username"]?>
            </h2>
        <?php } else { ?>
            <h2>
                Non hai i permessi, vai fuori!
            </h2>
        <?php }?>
    </main>
</body>
</html>