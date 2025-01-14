<?php

$names = ["Joe", "Jack", "Léa", "Zoé", "Néo"];

function htmlList(string $nomListe, array $elementListe)
{
    echo "<h3>" . $nomListe . "</h3>" . PHP_EOL;
    if ($elementListe == []) {
        return "<p>Aucun résultat</p>";
    } else {
        sort($elementListe);
        $liste = "<ul>";
        foreach ($elementListe as $value) {
            $liste .= PHP_EOL . "    <li>" . $value . "</li>";
        }
        $liste .= PHP_EOL . "</ul>";
        return $liste;
    }
}

function tableau(array $elementListe)
{
    foreach ($elementListe as $value) {
        echo $value . PHP_EOL;  //Parcoure toutes les valeurs d'un tableau indicé (sans key).           
    }
}

/** 
 * fonction tableau2 qui prends en parametre un tableau et parcours toutes ces valeurs et les affiches en utilisant l'indice ($i).
 */

function tableau2(array $table)
{
    for ($i = 0; $i < count($table); $i++) //Parcoure toutes les valeurs d'un tableau en utilisant l'indice ($i).
    {
        echo $table[$i] . PHP_EOL;
    }
}

echo htmlList("Listes des personnes", $names);

tableau($names);
tableau2($names);


