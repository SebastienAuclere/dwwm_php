<!DOCTYPE html>
<html lang="fr-fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcul d'une mensualité d'un pret</title>
    <link rel="stylesheet" href="./moncss/style1.css">
</head>

<body>
    <?php
    require "./model/Pret.php"; // si ce fichier n'est pas la 

    // var_export($_GET);




    if (isset($_GET["validation"]) && !empty($_GET["capitalemprunte"]) && !empty($_GET["tauxInteret"]) && !empty($_GET["dureeRemboursement"])) { // isset() : function determine  si une variable est déclarée et est différente de null. Renvoie true si tous sont définis, false sinon

        $monpret = new Pret(floatval($_GET["capitalemprunte"]), floatval($_GET["tauxInteret"]), intval($_GET["dureeRemboursement"]));

        $mensualite = $monpret->calculMensualite() . " €";
    }
    ?>
    <form action="" method="get" enctype="text/plain">
        <div class="boite">
            <div class="champ">
                <label for="capitalemprunte" class="centrer">Capital emprunté</label>
                <input type="number" id="capitalemprunte" step="0.01" min="0" name="capitalemprunte" class="tab"></label>
            </div>
            <div class="champ">
                <label for="tauxInteret" class="centrer2">Taux interêt en %: </label>
                <input type="number" id="tauxInteret" step="0.01" min="0" max="100" name="tauxInteret" class="tab1"></label>
            </div>
            <div class="champ">
                <label for="dureeRemboursement" class="centrer3">Durée de remboursements en nb d'année : </label>
                <input type="number" id="dureeRemboursement" step="1" min="0" max="100" name="dureeRemboursement" class="tab2"></label>
            </div>
            <div class="hauteurplus">
                <input type="submit" value="Valider" name="validation" class="butvalid">
                <label for="mensualite" class="espace">Mensualité :</label>
                <input type="text" id="mensualite" step="1" min="0" max="100" name="mensualite" value="<?php

                                                                                                        if (isset($mensualite)) {
                                                                                                            echo $mensualite;
                                                                                                        }

                                                                                                        ?>" class="espace2">
            </div>
            <div class="titreagauch champ">
                <caption>Tableau de remboursements (d'amortissements) du prêt:</caption>
            </div>
            <div class="tailletab">
                <?php
                echo $monpret->tableauAmortissement();
                ?>
            </div>
        </div>
    </form>
</body>

</html>