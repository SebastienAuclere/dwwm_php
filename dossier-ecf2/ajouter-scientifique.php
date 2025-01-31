<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body class="montserrat-font">
    <h2>Ajouter un scientifique</h2>
    <form action="./ajouter-scientifique-traitement.php" method="POST">
        <div>            
            <input type="text" name="lastname" id="lastname" placeholder="Nom">
        </div>
        <div>            
            <input type="text" name="firstname" id="firstname" placeholder="Prénom">
        </div>
        <div>            
            <input type="email" name="email" id="email" placeholder="Email">
        </div>
        <div>            
            <input type="password" name="password" id="password" placeholder="Mot de passe">
        </div>
        <div>            
            <input type="password" name="password2" id="password2" placeholder="Répéter Mot de passe">
        </div>
        <div>             
            <input type="number" id="level" name="level" placeholder="Level">
        </div>
        <div>
            <button type="submit" class="button">Ajouter</button>
        </div>
    </form>
    
</body>
</html>