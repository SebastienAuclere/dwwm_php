<!DOCTYPE html>
<html lang="fr-fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calcul impot</title>
</head>

<body>
</body>
    <?php 

    require_once './models/contribuable.php';
    require_once './models/mensualite.php';

    if(isset($_GET['firstname']) && isset($_GET['lastname']) && isset($_GET['revenu']) && $_GET['revenu'] > 0)
    {
        $monContribuable = new Contribuable($_GET['firstname'], $_GET['lastname'], $_GET['revenu']);
        $impots = 'Bonjour ' . $_GET['firstname'] . ' ' . $_GET['lastname'] . '. Votre impôt est de ' . $monContribuable->calculImpot() . ' €';
    }
    ?>

    <form action="index.php" method="get" enctype="multipart/form-data">
        <label for="firstname">Prénom:</label>
        <input name="firstname" id="firstname" type="text"><br>
        <label for="lastname">Nom:</label>
        <input name="lastname" id="lastname" type="text"><br>
        <label for="revenu">Vos revenus:</label>
        <input name="revenu" id="revenu" type="number" step="0.01"><br>
        <!-- <input type="number" name="impot" id="impot" readonly="true" /> -->
        <button type="submit">Ok</button>
        <!-- <label for="mensualite">Mensualité:</label>
        <input name="mensualite" id="mensualite" type="number" step="0.01" value=$_GET['mensualite'] disabled> -->
    </form>

    <p><?php echo $impots;?></p>

</body>

</html>