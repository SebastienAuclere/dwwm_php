<?php
$names = ['Joe', 'Jack', 'Léa', 'Zoé', 'Néo'];

function liHTML(array $tab): string
{
    sort($tab);
    $value = "";

    $length = count($tab);

    for ($i = 0; $i < $length; $i++) {
        $value .=  "    <li>" . $tab[$i] . "</li>\n";
    }
    return $value;
}

function htmlList(string $name, array $tab): string
{
    if (!empty($tab)) {

        return  "<h3>$name</h3>\n" .
            "<ul>\n"
            . liHTML($tab) .
            "</ul>\n";
    } else {
        return "<h3>$name</h3>\n" . "<p>Aucun résultat</p>";
    }
}

echo htmlList('Liste des personnes', $names);
