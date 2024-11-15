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
    require_once('./dao/dbconnect.php');
    require_once('./dao/Liste_resto.php');

    $objConnection = new Dbconnect('localhost', 'guide', 'root', '');
    $myConnect = $objConnection->tryConnect();

    $objConnectionAll = new Liste_resto($myConnect, 'restaurants');



    if (isset($_POST["submit"])) {

        $_nom = $_POST["nom"];
        $_adresse = $_POST["adresse"];
        $_prix = $_POST["prix"];
        $_commentaire = $_POST["commentaire"];
        $_note = $_POST["note"];
        $_visite = $_POST["visite"];

        $test = $objConnectionAll->creerLigne($_nom, $_adresse, $_prix, $_commentaire, $_note, $_visite);

        if($test === true) {
            /* echo "Données bien mise à jour"; */
            echo "<script>window.location.href = 'http://localhost/php_mysql/restaurants/index.php'</script>";
        }
        else {
            echo "Création échouée, veuillez recommencer";
        }
    }



    ?>
    <form action="" method="post" class="form-example">
        <div class="form-example">
            <label for="nom">Nom</label>
            <input type="text" name="nom" id="nom" value="" required pattern="^[a-zA-Z]+([-][a-zA-Z]+)?$"/>
        </div>
        <div class="form-example">
            <label for="adresse">Adresse</label>
            <input type="text" name="adresse" id="adresse" value="" required />
        </div>
        <div class="form-example">
            <label for="prix">Prix</label>
            <input type="text" name="prix" id="prix" value="" step="0.01" required />
        </div>
        <div class="form-example">
            <label for="commentaire">Commentaire</label>
            <input type="textarea" name="commentaire" id="commentaire" value="" required/>
        </div>
        <div class="form-example">
            <label for="note">Note</label>
            <input type="number" name="note" id="note" value="" required/>
        </div>
        <div class="form-example">
            <label for="date">Visite</label>
            <input type="date" name="visite" id="visite" value="" required/>
        </div>
        <div class="form-example">
            <input type="submit" name= "submit" value="Valider" />
        </div>
    </form>
</body>

</html>