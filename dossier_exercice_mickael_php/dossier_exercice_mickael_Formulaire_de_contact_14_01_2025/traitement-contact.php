<?php 

// La requpête est-elle de type POST ?
if(!empty($_POST))
{
    $nom = $_POST["nom"];
    $dateNaissance = $_POST["date"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // controle de saisie

    // affichage des données
    echo "<p>Nom : $nom</p>\n";
    echo "<p>Date de naissance : $dateNaissance</p>\n";
    echo "<p>Email : $email</p>\n";
    echo "<p>Message : $message</p>\n";
}

?>