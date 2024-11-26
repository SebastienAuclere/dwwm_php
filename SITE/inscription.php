<?php
$connexion = new PDO('mysql:host=localhost;dbname=user_base1','root','');
if($connexion){
    echo "connecté";
}





?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'inscription</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div>
        <h2>Inscription</h2>
        <p>Simple et Rapide</p>
        <form method="POST" action="">           
            <input type="text" name="nom" placeholder="Nom :">           
            <input type="text" name="prenom" placeholder="Prénom :">           
            <input type="email" name="email" placeholder="Email :">            
            <input type="password" name="password" placeholder="Mot de passe :">
            <input type="submit" value="Envoyer" name="Envoyer">
        </form>
        <p>En cliquant sur s'inscrire, vous acceptez nos <a href="">Conditions générales</a>, notre <a href="">Politique de
                confidentialité</a> et notre <a href="">Politique d'utilisation</a>des cookies.</p>
        <p>Avez-vous déjà un compte ? <a href="connection.php">Connection</a></p>
    </div>    
</body>
</html>