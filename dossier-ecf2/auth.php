<?php 
/* auth.php */

require_once 'Dao/ScientistRepository.php';

// Démarre la session et initialise le tableau $_SESSION
session_start();

if(!empty($_POST)) {
    try {
        if(!isset($_POST['email'], $_POST['password'])) {
            throw new Exception('Formulaire incomplet');
        }

        // 1. Récupérer et contrôler les données du formulaire

        // Si le nom du scientifique ne correspond pas à l'expression régulière
        // je n'ai pas la regex pour l'email dans mes cours!!!

        if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
           throw new Exception('Email non valide !');
        }

        // si le mot de passe est inférieur à 6 caractères
        if(mb_strlen($_POST['password']) < 6) {
            throw new Exception('Mot de passe trop court');
        }

        // Authentification
        $user = ScientistRepository::signIn($_POST['email'], $_POST['password']);

        // Si $user est vide, l'authentification a échoué
        if(empty($user)) {
            throw new Exception('email OU mot de passe incorrect');
        }

        var_export($user); exit;

        // Affichage
        echo "<pre>";
        echo "M(e) ".($_POST['lastname'])." ". ($_POST['firstname']).": 
        Cher confrère,

        Bienvenue sur notre page de présentation et de localisation de notre invention révolutionnaire :
        l’excavatrice de poche nommé « La taupe » piloté par un conducteur et un navigateur mécanicien.";
        echo "</pre>";

        // Sauvegarder les données de l'utilisateur en Session $_SESSION
        $_SESSION['id'] = $user['id_scientist'];
        $_SESSION['lastname'] = $user['lastname_scientist'];

        //var_export($_SESSION);


        // Rediriger vers une page "taupe.php"
        header('location: taupe.php');
        exit;


        /**
         * 1. Récupérer les données du formulaire
         * 2. Invoquer la méthode de la classe AuthRepository pour vérifier les identifiants fournis
         * 3. Si les identifiants sont incorrects: lever une erreur
         * 4. Si les identifiants sont corrects: 
         *      Rediriger vers une page "profil.php" qui affiche : 
         *          a. "Bonjour $username, vous êtes connecté" 
         *          b. Les informations de l'utilisateur identifié
         *          c. 3 liens : 
         *              - "Se déconnecter": déconnecte l'utilisateur et le redirige vers le formulaire d'identification
         *              - "Afficher tous les utilisateurs" : redirige vers une page qui liste tous les utilisateurs
         *              - "Ajouter une nouvel utilisateur": redirige vers un formulaire permettant l'ajout d'une utilisateur
         */


    } 
    catch(Exception $ex) {
        echo $ex->getMessage();
    }
}