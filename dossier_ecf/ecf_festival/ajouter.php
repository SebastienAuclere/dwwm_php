<?php

require "./model/candidateRepository.php";
require "./model/dbconnect.php";

$myObject = new CandidateRepository("departements");
$data = $myObject->searchAll($_GET["id_dep"])

if (isset($_POST["send"])) {
    $test = $myObject->createCandidate($_POST["lastname_user"], $_POST["firstname_user"], $_POST["mail_user"], $_POST["pw1"], $_POST["pw2"], $_POST["age"]); //floatval($_POST["price"]) intval
    if ($test === true) {
        // retour a la page d'accueil
        header("Location:./index.php");  // "header" est une fonction qui redirige vers une page
    } else {
        echo "ajout du candidat à echoué veuillez recommencer";
    }
}

?>
<!DOCTYPE html>
<html lang="fr-fr">

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>candidat</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='./mon_css/styleform.css'>
</head>

<body>
    <div>
        <form action="" method="POST" class="background">
            <div>
                <label for="lastname_user">Nom</label>
                <input type="text" id="lastname_user" name="lastname_user" class="center1">
            </div>
            <div>
                <label for="firstname_user">Prénom</label>
                <input type="text" id="firstname_user" name="firstname_user" class="center2">
            </div>
            <div>
                <label for="mail_user" class="bottom">email</label>
                <input type="email" id="mail_user" name="mail_user" class="inputstyle1">
            </div>
            <div>
                <label for="pwd1" class="top">Mot de passe</label><br>
                <input type="password" id="pwd1" name="pwd1" class="inputstyle2">
            </div>
            <div>
                <label for="pwd2" class="top">Vérification du mot de passe</label><br>
                <input type="password" id="pwd2" name="pwd2" class="inputstyle2">
            </div>
            <div>
                <label for="dept">Département de votre domicile principal</label>
                <select name="dept" id="dept">
                    <option value=" <?php echo $test = (isset($_GET["id_user"])) ? $data["departement_user"] : "" ?>">Choisir un Département</option>
                </select>
            </div>
            <div>
                <label for="age">Votre age</label>
                <input type="number" id="age" name="age" class="center2">
            </div>
            <div>
                <input type="submit" value="Valider" name="send" class="stylbut">
            </div>
        </form>
    </div>
</body>

</html>