<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Exercice julien quadratique</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>

<body>
    <?php

    for ($i = 0; $i < 2; $i++) {

        $a = rand(0, 10);
        $b = rand(0, 10);
        $c = rand(0, 10);

        $Delta = $b * $b - (4 * $a * $c);

        if ($Delta > 0) {
            echo "l'équation a deux solutions réelles distinctes.";
            echo $d = (-$b + (pow($Delta, 1 / 2)) / 2 * $a);
            echo $e = (-$b - (pow($Delta, 1 / 2)) / 2 * $a);
        } elseif ($Delta === 0) {
            echo "l'équation a une solution réelle double.";
            echo $f = (-$b / 2 * $a);
        } else {
            echo "l'équation n'a pas de solution réelle";
        }
    }

    ?>

</body>

</html>