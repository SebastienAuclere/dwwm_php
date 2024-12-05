<?php
$connexion = new PDO('mysql:host=localhost;port=3306;dbname=user_base1','root','');
if(isset($_POST['Envoyer'])){
    if(!empty($_POST['email']) && !empty($_POST['password'])){
        $email = htmlspecialchars($_POST['email']);        
        $password = sha1($_POST['password']);
        $requeteSql = $connexion->prepare("SELECT * FROM users WHERE email =? AND password =?");
        $requeteSql->execute(array($email,$password));
        $compteur = $requeteSql->rowCount();

        if($compteur == 1){
            $message = "Votre compte a ete trouvé.";
        }
        else
        {
            $message = "desole votre compte n'as pas ete trouvé.";
        }
    }
    else
    {
        $message = "il faut remplir tout les champs";
    }
}

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de connexion</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="div1">
        <h2>Connexion</h2>
        <p>Simple et Rapide</p>
        <form method="POST" action="">                       
            <input type="email" name="email" placeholder="Email :">            
            <input type="password" name="password" placeholder="Mot de passe :">
            <input type="submit" value="Se connecter" name="Envoyer"><br>
            <div style="color:red;text-align:center;">
                <?php
                if(isset($message)){
                    echo $message;
                }

                ?>
            </div> 
        </form>
        <p>Pas de compte ? <a href="inscription.php">Inscription</a></p>
    </div>    
</body>
</html>