<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Le Restaurant</title>
</head>
<body>
    <?php
    require_once ('./dao/dbconnect.php');
    require_once ('./dao/Liste_resto.php');

    $objConnection = new Dbconnect('localhost', 'guide', 'root', '');
    $myConnect = $objConnection->tryConnect();

    $objConnectionAll = new Liste_resto($myConnect,'restaurants');
    $myConnectAll = $objConnectionAll->affichageAll();

    /* var_dump($myConnect);
    var_export($myConnectAll); */
    var_export($objConnectionAll->chercherResto(3));

    echo $objConnectionAll->rendre_HTML();
    
    if (isset($_GET['id']) && !empty($_GET['id'])) {
        echo $objConnectionAll->supprimerLigne($_GET['id']);
        echo "<script>window.location.href = 'http://localhost/php_mysql/restaurants/index.php'</script>";
    }



    /* try {
            $myConnection = new PDO("mysql:host=localhost;port=3306;dbname=guide_resto;charset=utf8", "root", '');
            $pdoStatement = $myConnection->query("SELECT * FROM restaurants", PDO::FETCH_ASSOC);
            $monTab = $pdoStatement->fetchAll();

            echo "<pre>";
            var_export($monTab);
            echo "</pre>";

        } catch (PDOException $e) {
            printf("Echec de la connexion : %s\n", $e->getMessage());
            exit();
        } */
    ?>
</body>
</html>