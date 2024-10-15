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
        require "./model/dbconnect.php";                                                   //
        require "./model/liste_resto.php";                                                 //

        $mylist = new RestoRepository("restaurants");                                      //
    ?>
    <form action="" method="get" enctype="text/plain">                                     
            <div>
                <label for="username" class="champ">Nom d'utilisateur:</label>
                <input type="text" id="username" name="username" class="champ"></label>
            </div>
            <div class="champ">
                <label for="password">Mot de Passe:</label>
                <input type="text" id="password" max="50" name="password" 
                       value="<?php echo "khgkgkgjk"; ?>" class="champ2">
                <input type="submit" value="Valider" name="validation" class="butvalid">
            </div>
            <p>Tableau des restaurants:</p>
            <div class="tailletab">
                <?php

                $data = $mylist->searchAll();                                                  //

                echo "<table><thead><tr><th>id</th><th>nom</th><th>adresse</th><th>prix</th>   
                <th>commentaire</th><th>note</th><th>visite></th></tr></thead><tbody>";        //

                for ($i = 0; $i < count($data); $i++) {                                        // 
                    echo "<tr>";                                                               //
                    foreach ($data[$i] as $key => $value) {                                    //
                        echo "<td>" . $value . "</td>";                                        // 
                    }                                                                          //
                    echo "</tr>";                                                              // 
                }                                                                              //
                echo "</tbody></table>";                                                       // 

                echo $mylist->ajouterResteau("Burger King", "rue des Mimosas", 15, "C\'est pour les enfants", 5, "2024-05-06");  //

                ?>
            </div>
        </div>
    </form>
</body>
</html>