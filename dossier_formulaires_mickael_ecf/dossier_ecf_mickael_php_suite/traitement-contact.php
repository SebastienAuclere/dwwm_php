<?php
// traitement-contact.php avec persistance des données

// inclusion de la classe FormRepository afin d'y avoir accès
require_once 'Dao/FormRepository.php';

// Si la méthode HTTP de la requête est "POST"
if (!empty($_POST)) { 
    try {
        // Vérification que toutes les données ont bien été soumises
        // Si l'une des donnée est manquante, on lève une exception qui sera attrapée dans le bloc "catch"
        if(!isset($_POST['nom'], $_POST['age'])) {
            throw new Exception('Le formulaire est incomplet');
        }

        // Récupérer les données du formulaire
        $nom = $_POST['nom'];
        $age = $_POST['age'];

        // Contrôle du nom : Uniquement des lettres et entre 2 et 50 caractères
        // Si le nom ne respecte pas le format attendu : erreur
        if(!preg_match('/^[a-zA-Z]{2,50}$/', $nom)) {
            throw new Exception('Le format du nom est incorrect');
        }

        // contrôle de l'age : Doit être un entier entre 1 et 120
        // Si l'âge ne respecte pas les conditions : erreur
        if(!filter_var(
            $age, 
            FILTER_VALIDATE_INT, 
            ["options" => ['min_range' => 1, 'max_range' => 120]]
        )) {
            throw new Exception('L\âge renseigné est invalide');
        }

        // Une fois les contrôles effectués, et à partir de ce point, on considère les données valides. Nous pouvons donc les exploiter.

        // Sauvegarde dans la base de données et affichage du résultat
        if(FormRepository::insertData($nom, $age)) {
            echo 'Les données ont bien été sauvegardées';
        } else {
            echo 'Erreur lors de la sauvegarde des données';
        }

        // Ajout d'un lien pour retourner vers le formulaire
        echo '<p><a href="index.html">Retour au formulaire</a></p>';

        
    } catch(Exception $ex) {
        // Si une erreur est levée dans le bloc "try" ci-dessus, l'erreur correspondante est affichée et le script s'arrête
        echo $ex->getMessage();
        exit;
    }    
}