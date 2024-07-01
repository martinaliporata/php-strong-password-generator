<?php
session_start();

// se la sessione eiste, le dico session unset
if(isset($_SESSION[$logged]) && $_SESSION[$logged] === true) {
    session_unset();
    // e ritorna alla pagina di login
    Header("Location: ./login.php");
}
?>