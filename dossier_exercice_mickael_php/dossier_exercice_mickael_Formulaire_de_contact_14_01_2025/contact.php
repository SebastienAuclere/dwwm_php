<!DOCTYPE html>
<html lang="fr-fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de contact</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h2>Formulaire de contact</h2>
    <form action="traitement-contact.php" method="POST">
        <label for="monNom">Nom :</label>

        <input type="text" id="monNom" name="nom" required pattern="^[A-Za-z '-]+$" minlength="2" maxlength="20">
        <label for="dateNaissance">Date de naissance :</label>

        <input type="date" id="dateNaissance" name="date" title="format de la date : 01.01.25" pattern="[0-9]{2}.[0-9]{2}.[0-9]{2}" maxlength="8" required>
        <label for="Email">Email :</label>

        <input type="email" id="Email" name="email" required pattern="^[A-Za-z]+@{1}[A-Za-z]+\.{1}[A-Za-z]{2,}$">
        <label for="Message">Message :</label>

        <textarea id="Message" name="message" required>Entrer votre message ici</textarea>

        <button type="submit">Valider</button>
    </form>

    <?php

        $nom = $_POST["nom"]; 
        $dateNaissance = $_POST["date"];
        $email = $_POST["email"];
        $message = $_POST["message"];       

    ?>
</body>
</html>    