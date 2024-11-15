<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>liste.php</title>
</head>
<body>
    <?php
    echo "bonjour Me ou M. " . $_SESSION["prenom_user"] . " " . $_SESSION["nom_user"] . " vous êtes bien connecté.";    
    ?>
</body>

</html>