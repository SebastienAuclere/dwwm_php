<?php
    function isMajor(int $age): bool {
        if($age > 17) {
            return true;
        }
        return false;
    }

    var_dump(isMajor(12));
    echo PHP_EOL;
    var_dump(isMajor(18));
    echo PHP_EOL;
    var_dump(isMajor(42));
    echo PHP_EOL;

    function getRetired(int $age): string {
        if($age < 0) {
            return "Vous n'êtes pas encore né";
        }
        elseif($age >= 0 && $age < 60) {
            return 'Il vous reste ' . 60 - $age .  ' ans avant la retraite';
        }
        elseif($age === 60) {
            return 'Vous êtes à la retraite cette année';
        }
        else {
            return 'Vous êtes à la retraite depuis ' . $age - 60 . ' ans';
        }
    }

    echo getRetired(-2);
    echo PHP_EOL;
    echo getRetired(12);
    echo PHP_EOL;
    echo getRetired(60);
    echo PHP_EOL;
    echo getRetired(72);
    echo PHP_EOL;

    function getMax(float $num1, float $num2, float $num3): float {
        if($num1 === $num2 || $num1 === $num3 || $num2 === $num3) {
            return 0;
        }
        else {
            return max(round($num1,3), round($num2,3), round($num3,3));
        }
    }

    echo getMax(2,4,6);
    echo PHP_EOL;
    echo getMax(2,5,5);
    echo PHP_EOL;
    echo getMax(2,2,5);
    echo PHP_EOL;
    echo getMax(-2,5,5.78899);
    echo PHP_EOL;

    function capitalCity(string $country): string {
        switch (true) {
            case $country === "France":
                $capital = "Paris";
                break;
            case $country === "Allemagne":
                $capital = "Berlin";
                break;
            case $country === "Italie":
                $capital = "Rome";
                break;
            case $country === "Maroc":
                $capital = "Rabat";
                break;
            case $country === "Espagne":
                $capital = "Madrid";
                break;
            case $country === "Portugal":
                $capital = "Lisbonne";
                break;    
            case $country === "Angleterre":
                $capital = "Londres";
                break;
            default:
                $capital = "Capitale inconnue";
        }
        return $capital;
    }

    echo capitalCity("France");
    echo PHP_EOL;
    echo capitalCity("Allemagne");
    echo PHP_EOL;
    echo capitalCity("Italie");
    echo PHP_EOL;
    echo capitalCity("Maroc");
    echo PHP_EOL;
    echo capitalCity("Espagne");
    echo PHP_EOL;
    echo capitalCity("Portugal");
    echo PHP_EOL;
    echo capitalCity("Angleterre");
    echo PHP_EOL;
    echo capitalCity("Pologne");
    echo PHP_EOL;