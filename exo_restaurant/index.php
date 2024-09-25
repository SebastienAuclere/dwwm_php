<!DOCTYPE html>
<html lang="fr-fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Création d'une couche d'accès aux données en php</title>
    <link rel="stylesheet" href="./mon_css/style2.css">
</head>

<body>
    <?php
    require "./model/dbconnect.php";
    require "./model/liste_resto.php";

    $myconnect = new Dbconnect("localhost", "root", "", "guide");
    $myPdo = $myconnect->tryConnect();

    $mylist = new RestoRepository($myPdo, "restaurants");



    ?>
    <form action="" method="get" enctype="text/plain">
        <div class="boite">
            <div class="champ">
                <label for="username" class="centrer2">Nom d'utilisateur:</label>
                <input type="text" id="username" name="username" class="tab1"></label>
            </div>
            <div class="hauteurplus">
                <label for="password" class="espace">Mot de Passe:</label>
                <input type="text" id="password" max="50" name="password" value="<?php

                                                                                    ?>">
                <input type="submit" value="Valider" name="validation" class="butvalid" class="espace2">
            </div>
            <div>
                <caption>Tableau des restaurants:</caption>
            </div>
            <div class="tailletab">
                <?php
                var_export($mylist->searchAll());
                ?>
            </div>
        </div>
    </form>
</body>

</html>