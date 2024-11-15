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
    
    $mylist = new RestoRepository("restaurants");           
    ?>
    <p>Tableau des restaurants:</p>
    <a href="ajouter.php" target="_blank"> Ajouter</a><br><br><br>
    <div class="tailletab">
        <?php
        $data = $mylist->searchAll();                                                 
        
        echo "<table><thead><tr><th>Modifier</th><th>Supprimer</th><th>id</th><th>nom</th><th>adresse</th><th>prix</th>   
              <th>commentaire</th><th>note</th><th>visite></th></tr></thead><tbody>"; 

        for ($i = 0; $i < count($data); $i++) {                                        
            echo "<tr><td><a href='modifier.php?id=".$data[$i]["id"]. "' target='_blank'>modifier</a></td><td>
            <form action='supprimer.php' method='GET'><input type='hidden' name='id' value='" . $data[$i]['id'] . "'>
            <input type='submit' value='supprimer' name='suppr' id='suppression'></form></td> ";                                                               
            foreach ($data[$i] as $key => $value) {                                    
                echo "<td>" . $value . "</td>";                                 
            }                                                                        
            echo "</tr>";                                                              
        }                                                                              
        echo "</tbody></table>";                                                       
 
        ?>
    </div>
</body>

</html>