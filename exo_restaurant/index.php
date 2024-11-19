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
        $data = $mylist->searchAll();   //recupere les donnees : Cela appelle une méthode searchAll() sur l'objet $mylist, qui renvoie probablement un tableau de données, chaque entrée représentant une ligne de la base de données.                                              
        
        echo "<table><thead><tr><th>Modifier</th><th>Supprimer</th><th>id</th><th>nom</th><th>adresse</th><th>prix</th>   
              <th>commentaire</th><th>note</th><th>visite></th></tr></thead><tbody>"; 
                // Construction du tableau HTML : commence à générer le code HTML pour un tableau, avec une ligne d'en-têtes pour les colonnes "Modifier", "Supprimer", "id", "nom", "adresse", "prix", "commentaire", "note" et "visite".
        for ($i = 0; $i < count($data); $i++) {    // Boucle à travers les données : Une boucle for est utilisée pour itérer (itérer sur un tableau de données pour générer des éléments HTML) à travers chaque entrée du tableau $data.                                  
            echo "<tr><td><a href='modifier.php?id=".$data[$i]["id"]. "' target='_blank'>modifier</a></td><td>
            <form action='supprimer.php' method='GET'><input type='hidden' name='id' value='" . $data[$i]['id'] . "'>
            <input type='submit' value='supprimer' name='suppr' id='suppression'></form></td> ";                                                               
            // Génération des lignes du tableau : Pour chaque entrée, il génère une nouvelle ligne <tr> dans le tableau avec deux colonnes spéciales pour "Modifier" et "Supprimer". La colonne "Modifier" contient un lien hypertexte qui ouvre modifier.php dans une nouvelle fenêtre/onglet avec l'ID passé en paramètre d'URL. La colonne "Supprimer" contient un formulaire avec une méthode GET, qui envoie l'ID à supprimer.php.
            foreach ($data[$i] as $key => $value) {  // Affichage des données : Pour chaque clé-valeur de l'entrée, il génère une cellule <td> avec la valeur de la donnée.                                 
                echo "<td>" . $value . "</td>";                                 
            }                                                                        
            echo "</tr>";  //Fermeture des lignes du tableau : Ferme la ligne <tr> après avoir ajouté toutes les cellules <td>.                                                           
        }                                                                              
        echo "</tbody></table>"; //Fermeture du tableau HTML :                                                      
 


        //En résumé, ce code génère dynamiquement un tableau HTML avec les données récupérées de searchAll(), offrant des liens pour modifier et supprimer chaque entrée.
        ?>
    </div>
</body>

</html>