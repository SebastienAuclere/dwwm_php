<?php

function isMajor(int $valeur): bool
{
    if ($valeur >= 18) {
        return true;
    } else {
        return false;
    }
}

function getRetired(int $age): string
{
    if ($age > 60) {
        return "Vous êtes à la retraite depuis " . ($age - 60) . " ans";
    } elseif ($age < 60 && $age > 0) {
        return "Il vous reste " . (60 - $age) . " ans avant la retraite";
    } elseif ($age === 60) {
        return "Vous êtes à la retraite cette année";
    } else {
        return "Vous n'êtes pas encore né";
    }
}

function getMax(float $val1, float $val2, float $val3): float
{
    if (($val1 > $val2) && ($val1 > $val3)) {
        return round($val1, 3);
    } elseif (($val2 > $val1) && ($val2 > $val3)) {
        return round($val2, 3);
    } elseif (($val3 > $val1) && ($val3 > $val2)) {
        return round($val3, 3);
    } else {
        return 0;
    }
}

function capitalCity(string $pays): void
{
    switch ($pays) {
        case "France":
            echo "Paris";
            break;
        case "Allemagne":
            echo "Berlin";
            break;
        case "Italie":
            echo "Rome";
            break;
        case "Maroc":
            echo "Rabat";
            break;
        case "Espagne":
            echo "Madrid";
            break;
        case "Portugal":
            echo "Lisbonne";
            break;
        case "Angleterre":
            echo "Londres";
            break;
        default:
            echo "Capitale inconnue";
    }
}

var_dump(isMajor(14));
echo getRetired(-2) . PHP_EOL;
echo getRetired(45) . PHP_EOL;
echo getRetired(68) . PHP_EOL;
echo getRetired(60) . PHP_EOL;
echo getMax(4.145658, 9.125458, 6.589758) . PHP_EOL;
echo capitalCity("Portugal") . PHP_EOL;
echo capitalCity("Sénégal") . PHP_EOL;
