<?php
require "./model/dbconnect.php";
require "./model/liste_resto.php";

$myCrud = new RestoRepository("restaurants");
$data = $myCrud->chercherResteau($_GET["id"]);



if (isset($_POST["send"])) {
    $test = $myObject->updateRestau($_GET["id"], $_POST["name"], $_POST["address"], floatval($_POST["price"]), $_POST["comments"], intval($_POST["note"]), $_POST["visit"]);
    if ($test === true) {
        echo "modification OK";
      //  header("Location:./index.php");  // "header" est une fonction qui redirige vers une page
    } else {
        echo "Modification du restaurant a echoue veuillez recommencer";
    }
}
?>
<!DOCTYPE html>
<html lang="fr-fr">

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>resto</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='./mon_css/styleform.css'>
    <script src='main.js'></script>
</head>

<body>
    <div>
        <form action="" method="POST" class="background">
            <div>
                <label for="name">name:</label>
                <input type="text" id="name" name="name" class="center1" value="<?php echo $test = (isset($_GET["id"])) ? $data["nom"] : "" ?>">
                <!-- ternaire : si l'id recuperé par get n'est pas null, recuperer "nom" dans tableau "$data" sinon "" chaine vide. -->
            </div>
            <div>
                <label for="address">address:</label>
                <input type="text" id="address" name="address" class="center2" value="<?php echo $test = (isset($_GET["id"])) ? $data["adresse"] : "" ?>">                
            </div>
            <div>
                <label for="price">price (between 0 and 200):</label>
                <input type="number" id="price" name="price" min="0" max="200" class="center3" value="<?php echo $test = (isset($_GET["id"])) ? $data["prix"] : "" ?>">                
            </div>
            <div>
                <textarea name="comments" rows="10" cols="50" class="center4"> <?php echo $test = (isset($_GET["id"])) ? $data["Commentaire"] : "" ?></textarea>                
            </div>
            <div>
                <label for="note">note (between 0 and 10):</label>
                <input type="number" id="note" name="note" min="0" max="10" class="center5" value="<?php echo $test = (isset($_GET["id"])) ? $data["Note"] : "" ?>">                
            </div>
            <div>
                <label for="visit">Enter a date before 1980-01-01:</label>
                <input type="date" id="visit" name="visit" max="2024-12-31" class="center6" value="<?php echo $test = (isset($_GET["id"])) ? $data["visite"] : "" ?>">              
            </div>
            <div>
                <input type="submit" value="Submit" name="send" class="center7">
            </div>
        </form>
    </div>
</body>

</html>