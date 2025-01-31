<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authentification</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body class="montserrat-font">    
    <h2>Connexion</h2>
    <form action="auth.php" method="POST" >
        <div>
            <input type="email" name="email" id="email" placeholder="Ton adresse email">
        </div>
        <div>
            <input type="password" name="password" id="password" placeholder="Ton mot de passe">
        </div>
        <div>
            <button type="submit" class="button">Connexion</button>
        </div>
    </form>
</body>
</html>