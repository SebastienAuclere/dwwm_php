<?php

$names = ['Joe', 'Jack', 'Léa', 'Zoé', 'Néo' ];

function firstItem(array $tab): ?string
{
    $first = $tab[0];
    return $first;
}

if (var_dump(firstItem($names))) {
    var_dump(firstItem($names));
}
else {
    echo firstItem($names);
}

echo PHP_EOL;

function lastItem(array $tab): ?string
{
    $last = $tab[count($tab)-1];
    return $last;
}

if (var_dump(lastItem($names))) {
    var_dump(lastItem($names));
}
else {
    echo lastItem($names);
}

echo PHP_EOL;

function sortItem(array $tab): array
{
    rsort($tab);
    print_r($tab);

    return $tab;

}

echo sortItem($names);
echo PHP_EOL;

function stringItems(array $tab): string
{
    sort($tab);
    print_r($tab);

    return implode(", ", $tab);
}

if(empty($tab)) {
    return "Nothing to display";
}
else {
    stringItems($tab);
}

echo stringItems($names);
echo PHP_EOL;