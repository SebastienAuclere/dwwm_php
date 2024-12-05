<?php
$connexion = new PDO('mysql:host=localhost;port=3306;dbname=user_base1','root','');
if($connexion)
{
    echo "connecter";
}
if(isset($_POST['envoyer']))
{
    if(!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['email']) && !empty($_POST['password']))
    {
        $nom = htmlspecialchars($_POST['nom']);
        $prenom = htmlspecialchars($_POST['prenom']);
        $email = htmlspecialchars($_POST['email']);        
        $password = sha1($_POST['password']);

        if(strlen($_POST['password']) < 7)
        {
            $message = "Votre mot de passe est trop court.";
        }
        elseif(strlen($_POST['nom'])>50 || strlen($_POST['prenom'])>50)
        {
            $message = "votre nom ou prenom est trop long";
        }
        else
        {
            $insertion = $connexion->prepare("INSERT INTO users (nom,prenom,email,password) VALUES (?,?,?,?)");
            $insertion->execute(array($nom,$prenom,$email,$password));
            $message = "Votre compte a bien été créé.";
        }
    }
    else
    {
        $message = "Remplissez tous les champs.";
    }
}




?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'inscription</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="div1">
        <h2>Inscription</h2>
        <p>Simple et Rapide</p>
        <form method="POST" action="">           
            <input type="text" name="nom" placeholder="Nom :">           
            <input type="text" name="prenom" placeholder="Prénom :">           
            <input type="email" name="email" placeholder="Email :">            
            <input type="password" name="password" placeholder="Mot de passe :">
            <input type="submit" value="Envoyer" name="envoyer">
            <div style="color:red;text-align:center;">
            <?php
                if(isset($message))
                {
                    echo $message;
                }
            ?>
            </div>
        </form>
        <p>En cliquant sur s'inscrire, vous acceptez nos <a href="">Conditions générales</a>, notre <a href="">Politique de
                confidentialité</a> et notre <a href="">Politique d'utilisation</a>des cookies.</p>
        <p>Avez-vous déjà un compte ? <a href="connection.php">Connection</a></p>
    </div>    
</body>
</html>