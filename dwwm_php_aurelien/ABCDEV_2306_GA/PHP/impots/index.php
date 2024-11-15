<!DOCTYPE html>
<html lang="fr-fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calcul impot</title>
</head>

<body>
</body>
<?php

require_once './models/contribuable.php';
require_once './models/pret.php';

if (isset($_GET['valider']) && isset($_GET['k']) && isset($_GET['ta']) && isset($_GET['an']) && $_GET['an'] > 0) {
    $monPret = new Pret($_GET['k'], $_GET['ta'], $_GET['an']);
    $monTableau = $monPret->getTableauAmortissement();

    echo "<table><thead><tr>";
    foreach ($monTableau[0] as $key => $value) {
        echo "<th>" . $key . "</th>";
    }

    echo "</tr></thead><tbody>";

    for ($i = 0; $i < count($monTableau); $i++) {
        echo "<tr>";

        foreach ($monTableau[$i] as $key => $value) {
            echo "<th>" . $value . "</th>";
        }


        echo "</tr>";
    }

    echo "</tbody></table>";
}
?>

<form action="index.php" method="get" enctype="multipart/form-data">
    <label for="k">Capital emprunté : </label>
    <input name="k" id="k" type="number" step="0.01"><br>
    <label for="ta">Taux d'intérêt en %: </label>
    <input name="ta" id="ta" type="number" step="0.01"><br>
    <label for="an">Durée de remboursement en nombre d'année : </label>
    <input name="an" id="an" type="number" step="0.01"><br>
    <button type="submit" name="valider">Valider</button>
</form>

<?php
if (isset($monPret)) {
    $chaine_mensualite = '<p>Bonjour Votre mensualité est de ' . $monPret->calculMensualite() . '€ </p>';
    echo $chaine_mensualite;
}
?>

</body>

</html>