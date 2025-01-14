<?php
session_start();

require "./model/dbconnect.php";
require "./model/utilisateur.php";

$myUser = new Utilisateur();

if (isset($_POST['send'])) {
    $testConnect = $myUser->signIn($_POST['email'], $_POST['pwd']);
    if ($testConnect === true) {
        header("Location:./liste.php");
    } else {
        echo "votre mot de passe ou votre nom d'utilisateur est erroné !";
    }
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index.php</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <a href="liste.php">cliquer ici</a>
    <div>
        <hr>
        <form action="" method="POST">
            <h2>ACCES MEMBRES</h2>
            <label for="email" class="bottom">email</label>
            <input type="email" id="email" name="email" class="inputstyle1">
            <label for="pwd" class="top">Mot de passe</label><br>
            <input type="password" id="pwd" name="pwd" class="inputstyle2">
            <input type="submit" value="Valider" name="send" class="stylbut">
        </form>
        <hr>
    </div>
</body>

</html>