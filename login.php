<?php
$users = [
    [
        "username" => "Martina",
        "password" => "Venezia",
    ],
    [
        "username" => "Lucia",
        "password" => "Lisbona",
    ],
    [
        "username" => "Tiziano",
        "password" => "Capri",
    ],
    [
        "username" => "Marco",
        "password" => "Alessandria",
    ],
    [
        "username" => "Silvia",
        "password" => "Lombardia",
    ],
    [
        "username" => "Diego",
        "password" => "Savona",
    ],
];

session_start();
// inserisco questa variabile per "dire ha provato a fare login?"
$attemptedLogin = false;
// cioè se logged è isset e true, fai il redirect
if(isset($_SESSION["logged"]) && $_SESSION["logged"] ===true) {
    Header("Location: ./index.php");
};

if(isset($_POST["username"]) && isset($_POST["password"])){
    // prendo i valori(che sono array che scorro), controllo se esiste lo username inserito
    // user è insieme di username e password
    foreach($users as $user){
        // $_POST["username"]) è ciò che ha scritto l'utente
        if($user["username"] === $_POST["username"]){
            // se lo username è gisuto, controlla la psw
            if ($user["password"] === $_POST["password"]){
                // se la psw è giusta, apri la variabile di sessione.
                // Potrei dire unset (ma ora sto problema non c'è) perché potrei essere già connesso/loggato; quindi, se esiste una session, io la unsetto perché io mi sto loggando con un nuovo utente.
                // dico alla sessione: in username hai $_POST["username"]
                $_SESSION["username"] = $_POST["username"];
                $_SESSION["password"] = $_POST["password"];
                // logged è true perché ho finito il login (username e psw son corrette)
                $_SESSION["logged"] = true;
                // facciamo un redirect - la stringa è l'indirizzo del file (inizialmente abbiamo fatto il redirect in questo punto, ma è meglio farlo all'inizio... guarda riga 36)
                Header("Location: ./index.php");
                break;
            }
        }
    };
    if(!isset($_SESSION["logged"])){
        $attemptedLogin=true;
    };
}
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
        <form action="./login.php" method="post">
            <section>
                <label for="username">Please, insert your username</label>
                <input type="text" name="username" id="username">
            </section>
            <section>
                <label for="password">Please, insert your password</label>
                <input type="text" name="password" id="password">
            </section>
            <section>
                <button type="submit"> Login </button>
            </section>
            <!-- Non appena l'utente prova a fare login-->
            <?php if ($attemptedLogin){ ?>
                <p>
                    I dati inseriti non sono corretti
                </p>
            <?php } ?>
        </form>
    </main>
</body>
</html>