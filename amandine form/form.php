<?php
/* echo '<pre>';
print_r($POST);
echo '<pre>'; */

$erreurs = [];
$nom = '';
$prenom = '';
$email = '';
$objet = '';
$message = '';
$validationMailOk = '';
$validationMailNotOk = '';

function verifNomOuPrenom($_maChaine): bool
{
    $subject = $_maChaine;
    $pattern = '/^[A-Za-zÀ-ÿ-]+$/';
    $res = preg_match($subject, $pattern);

    return $res;
}

function verifNomEmail($_maChaine): bool
{
    $subject = $_maChaine;
    $pattern = '/^[a-z0-9._-]+@[a-z0-9.-]+\.[a-z]{2,}$/';
    $res = preg_match($subject, $pattern);

    return $res;
}

function sendMail(string $_nom, string $_prenom, string $_email, string $_objet, string $_message): bool
{
    if (
        $_nom !== '' &&
        $_prenom !== '' &&
        $_email !== '' &&
        $_objet !== '' &&
        $_message !== ''
    ) {
        $to       = 'emailamandine@exemple.com';
        $subject  = $_objet;
        $message  = "nom:" . $_nom . "<br>prenom:" . $_prenom . "<br>message transmis:" . $_message;
        $headers  = array(
            'From' => 'webmaster@amandineauclere.fr', // remplir webmaster@amandineauclere.com "nom de domaine"
            'Reply-to' => $_email,
        );

        mail($to, $subject, $message, $headers); // peut changer suivant hebergeur (spam) 

        return true;
    } else {
        return false;
    }
}

if (isset($_POST["envoyer"])) {
    if (isset($_POST['nom']) && $_POST['nom'] !== '') {
        $test = verifNomOuPrenom($_POST['nom']);
        if ($test === 1) {
            $nom = $_POST['nom'];
        } else {
            echo "erreur nom";
        }
    } else {
        $erreurs['nom'] = 'le nom doit contenir au moins trois caractères!';
    }

    if (isset($_POST['prenom']) && $_POST['prenom'] !== '') {
        $test = verifNomOuPrenom($_POST['prenom']);
        if ($test === 1) {
            $prenom = $_POST['prenom'];
        } else {
            echo "erreur prénom";
        }
    } else {
        $erreurs['prenom'] = 'le prénom ne doit pas être vide !';
    }

    if (
        isset($_POST['email']) &&
        $_POST['email'] !== '' &&
        filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)
    ) {
        $test = verifNomEmail($POST['email']);
        if ($test === 1) {
            $email = $_POST['email'];
        } else {
            echo "erreur email";
        }
    } else {
        $erreurs['email'] = 'le mail n est pas valide';
    }

    if (isset($_POST['objet']) && $_POST['objet'] !== '') {
        $objet = htmlspecialchars($_POST['objet']);
    } else {
        $erreurs['objet'] = "objet ne doit pas etre vide";
    }

    if (isset($_POST['message']) && $_POST['message'] !== '') {
        $message = htmlspecialchars($_POST['message']);
    } else {
        $erreurs['message'] = "message ne doit pas etre vide";
    }

    if (sendMail($nom, $prenom, $email, $objet, $message)) {
        $validationMailOk = "message envoyé avec succès !";
    } else {
        $validationMailNotOk = "un problème est survenu veuillez 
        recommencer votre saisie";
    }
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/main.css">
    <title>Contact</title>
</head>

<body>
    <?php

    if (empty($erreurs)) {
        if ($validationMailOk !== '') {
            echo "<div class='valide'>le mail est envoyé</div>";
        }

        if ($validationMailNotOk === '') {
            echo "<div class='notValide'>l'envoi du mail a echoué !</div>";
        }
    }

    ?>
    <form action="" method="POST">
        <div>
            <?php
            if (isset($erreurs['nom']) && $erreurs['nom'] !== '') {
                echo '<div class="erreur">';
                echo $erreurs['nom'];
                echo '</div>';
            }
            ?>
            <label for="nom">Nom</label>
            <input type="text" name="nom" id="nom" value="<?= $nom ?>">
        </div>
        <div>
            <div class="erreur">
                <?php
                if (isset($erreurs['prenom']) && $erreurs['prenom'] !== '') {
                    echo $erreurs['prenom'];
                }
                ?>
            </div>
            <label for="prenom">Prénom</label>
            <input type="text" name="prenom" id="prenom" value="<?= $prenom ?>">
        </div>
        <div>
            <?php
            if (isset($erreurs['email']) && $erreurs['email'] !== '') {
                echo '<div class="erreur">';
                echo $erreurs['email'];
                echo '</div>';
            }
            ?>
            <label for="email">Email</label>
            <input type="text" name="email" id="email" value="<?= $email ?>">
        </div>
        <div>
            <div class="erreur">
                <?php
                if (isset($erreurs['objet']) && $erreurs['objet'] !== '') {
                    echo $erreurs['objet'];
                }
                ?>
            </div>
            <label for="objet">Objet</label>
            <input type="text" name="objet" id="objet" value="<?= $objet ?>">
        </div>
        <div>
            <div class="erreur">
                <?php
                if (isset($erreurs['message']) && $erreurs['message'] !== '') {
                    echo $erreurs['message'];
                }
                ?>
            </div>
            <label for="message">Message</label>
            <input type="text" name="message" id="message" value="<?= $message ?>">
        </div>
        <div class="container_submit">
            <input type="submit" name="envoyer" value="Envoyer">
        </div>
    </form>
</body>

</html>