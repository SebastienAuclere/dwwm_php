<!DOCTYPE html>
<html lang="fr-fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Création d'une couche d'accès aux données en php</title>
    <link rel="stylesheet" href="./mon_css/style2.css">
</head>

<body>
    <?php                                                                              // inclusion des fichiers requis : 
    require "./model/dbconnect.php";                                                   // Ces lignes incluent les fichiers dbconnect.php et liste_resto.php. 
    require "./model/liste_resto.php";                                                 // Le mot-clé require est utilisé pour inclure et évaluer les fichiers spécifiés.
    // Si l’un des fichiers n’est pas trouvé, une erreur fatale sera générée et l’exécution du script s’arrêtera.
    $mylist = new RestoRepository("restaurants");  // Création d’une instance de RestoRepository          
    ?>
    <p>Tableau des restaurants:</p>
    <a href="ajouter.php" target="_blank"> Ajouter</a><br><br><br>
    <div class="tailletab">
        <?php
        $data = $mylist->searchAll();                                                  // Récupération des données : Cette ligne appelle la méthode searchAll de l’objet $mylist (instance de RestoRepository) 
        // pour récupérer toutes les lignes de la table restaurants. Les données sont stockées dans le tableau $data. 
        echo "<table><thead><tr><th>id</th><th>nom</th><th>adresse</th><th>prix</th>   
                        <th>commentaire</th><th>note</th><th>visite></th></tr></thead><tbody>"; // Affichage du tableau HTML : Cette ligne commence la construction d’un tableau HTML avec une ligne d’en-tête contenant les noms des colonnes.

        for ($i = 0; $i < count($data); $i++) {                                        // Boucle pour afficher les données : La boucle for parcourt chaque élément du tableau $data
            echo "<tr>";                                                               // Pour chaque ligne de données, une nouvelle ligne de tableau (<tr>) est créée.
            foreach ($data[$i] as $key => $value) {                                    // La boucle foreach parcourt chaque colonne de la ligne actuelle et affiche la valeur dans une cellule de tableau (<td>).
                echo "<td>" . $value . "</td>";                                        // 
            }                                                                          //
            echo "</tr>";                                                              // 
        }                                                                              // Fermeture du tableau HTML:
        echo "</tbody></table>";                                                       // Cette ligne ferme le corps (<tbody>) et le tableau (<table>).

        // if($mylist->updateRestau(1,"Burger King", "rue des Mimosas", 15, "C\'est pour les enfants", 5, "2024-05-06")) {
        //     echo 'Bravo le restau a été mis à jour !';
        // }  // Ajout d’un nouveau restaurant : Cette ligne appelle la méthode ajouterResteau de l’objet $mylist pour ajouter un nouveau restaurant avec les informations fournies 
        // La méthode ajouterResteau retourne true si l’insertion a réussi, sinon false. Le résultat est affiché.

        // En résumé, ce code récupère toutes les données des restaurants, les affiche dans un tableau HTML, puis ajoute un nouveau restaurant et affiche le résultat de cette opération.

        /////////////// fonctions ///////////////
        // count() — Compte tous les éléments d'un tableau ou dans un objet Countable 
        ?>
    </div>
</body>

</html>