<!DOCTYPE html>
<html lang="fr-fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcul de l'impot sur le revenu</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <?php
    require "./model/Contribuable.php"; // si ce fichier n'est pas la 

    // var_export($_GET);

    if (isset($_GET["envoyer"]) && !empty($_GET["nom"]) && !empty($_GET["prenom"]) && !empty($_GET["revenu"])) { // isset() : function determine  si une variable est déclarée et est différente de null. Renvoie true si tous sont définis, false sinon
        // !empty() : function determine si variable est vide ici , !empty : n'est pas vide.  
        $monContribuable = new Contribuable($_GET["nom"], $_GET["prenom"], floatval($_GET["revenu"]));           // floatval() : function retourne (ou convertit) la valeur de type float (nombre à virgule flottante), extraite à partir du paramètre value. 
        // ($_GET["envoyer"]) : $_get est un tableau de variable super global qui sert a recuperer les données du formulaire. 
        echo "<h2> votre impot sera de : " . $monContribuable->calculImpot() . " € pour cette année </h2>";
    }



    ?>
    <form action="" method="get" enctype="text/plain">
        <h3>Coordonnées contribuable : </h3>
        <fieldset>
            <legend></legend>
            <div>
                <label for="nom">Votre nom :</label>
                <input type="text" id="nom" name="nom">
            </div>
            <div>
                <label for="prenom">Votre prénom :</label>
                <input type="text" id="prenom" name="prenom">
            </div>
            <div>
                <label for="revenu">Entrez votre revenu annuel : </label>
                <input type="number" id="revenu" step="0.01" min="0" name="revenu"></label>
            </div>
            <input type="submit" value="Envoyer" name="envoyer">
        </fieldset>
    </form>
   
</body>

</html>