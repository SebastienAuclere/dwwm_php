<?php 
    require_once 'Dao/ScientistRepository.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>scientifiques</title>
    <style>
        table, th, td { border: 1px solid blue; border-collapse: collapse; }
        th, td { padding: 5px; }
    </style>
</head>
<body>
    <h1>Liste des scientifiques</h1>
    <table>
        <thead>
            <tr>
                <td>id scientifique</td>
                <td>Nom scientifique</td>
            </tr>
        </thead>
        <tbody>
            <?php 
                // Récupérer les scientifiques à partir de la base de données
                $scientifiques = ScientistRepository::searchAll();

                // echo 'Il y a ' .count($scientifiques). ' scientifiques enregistrés';
               
                // boucle pour afficher tous les scientifiques
                foreach($scientifiques as $unScientifique) {
                    echo '<tr>';
                    echo '<td>' . $unScientifiques['id_scientist'] . '</td>';
                    echo '<td>' . $unScientifique['lastname_scientist'] . '</td>';
                    echo '</tr>';
                }
            ?>
        </tbody>
    </table>
    
</body>
</html>