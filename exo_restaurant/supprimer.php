<?php
require "./model/dbconnect.php";
require "./model/liste_resto.php";

$myCrud = new RestoRepository("restaurants");
$data = $myCrud->chercherResteau($_GET["id"]);

$myObject2 = new RestoRepository("restaurants");
$message_erreur = "";
if (isset($_GET["id"])) {
    $test = $myObject2->deleteRestau($_GET["id"]);
    if ($test === true) {
        $message_erreur = "suppression ok";
        header("Location:./index.php");  // "header" est une fonction qui redirige vers une page        
    } else {
        $message_erreur = "suppression du restaurant a echoué veuillez recommencer";
    }
}
?>
<!DOCTYPE html>
<html lang="fr-fr">

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>resto</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='./mon_css/styleform.css'>
    <script src='main.js'></script>
</head>

<body>
    <div>
        <?= $message_erreur ?>
    </div>
</body>

</html>