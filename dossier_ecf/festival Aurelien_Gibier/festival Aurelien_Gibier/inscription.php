<!DOCTYPE html>
<html lang="FR-fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Modification d'une ligne</title>
</head>

<body>

    <?php
    require_once ('dbconnect.php');
    require_once ('CandidateRepository.php');
    require_once ('DepartRepository.php');

    $objConnectionAll = new CandidateRepository();
    $objConnectionAll2 = new DepartRepository();

    $myConnectAll2 = $objConnectionAll2->searchAll();



    if (isset($_POST["submit"])) {

        $_lastname_user = $_POST["lastname_user"];
        $_firstname_user = $_POST["firstname_user"];
        $_mail_user = $_POST["mail_user"];
        $_pass_user = $_POST["pass_user"];
        $_departement_user = $_POST["departement_user"];
        $_age_user = $_POST["age_user"];

        $test = $objConnectionAll->createCandidate($_lastname_user, $_firstname_user, $_mail_user, $_pass_user, $_departement_user, $_age_user);

        if($test === true) {
            echo "Données bien mise à jour";
        }
        else {
            echo "Création échouée, veuillez recommencer";
        }
    }



    ?>
    <form action="" method="post" class="form-example">
        <div class="form-example">
            <label for="nom">Nom</label>
            <input type="text" name="lastname_user" id="lastname_user" value="" required pattern="^[a-zA-Z]+([-][a-zA-Z]+)?$"/>
        </div>
        <div class="form-example">
            <label for="adresse">Prénom</label>
            <input type="text" name="firstname_user" id="firstname_user" value="" required />
        </div>
        <div class="form-example">
            <label for="prix">Mail</label>
            <input type="text" name="mail_user" id="mail_user" value="" step="0.01" required />
        </div>
        <div class="form-example">
            <label for="commentaire">Mot de passe</label>
            <input type="textarea" name="pass_user" id="pass_user" value="" required/>
        </div>

        <label for="departements">Departements</label>
        <select name="dept" id="dept-select">
            <option value="<?php $_GET["id_dep"] ?>"><?php for ($i=0; $i < 96; $i++) {var_export($myConnectAll2["{$i}"]["Name"]);} ?></option>
        </select>

        <div class="form-example">
            <label for="number">Age</label>
            <input type="number" name="age_user" id="age_user" value="" required/>
        </div>
        <div class="form-example">
            <input type="submit" name= "submit" value="Valider" />
        </div>
    </form>
</body>

</html>