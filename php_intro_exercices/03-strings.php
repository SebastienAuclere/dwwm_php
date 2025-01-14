<?php

function getMC2(): string 
{
    $name = "Albert Einstein";
    return $name;
}

function getMC2bis (string $name): string
{
    $name = "Albert Einstein";
    return $name;
}

function getUserName(string $prenom, string $nom): string 
{    
    return $prenom . $nom;
}

function getFullName(string $prenom, string $nom): string
{
    $prenom = strtolower($prenom);
    $nom = strtoupper($nom);
    return $prenom . ' ' . $nom;
}

function askUser(string $nom, string $prenom): string
{     
    return "Bonjour " . getFullName("sebastien", "auclere") . ",connaissez-vous " . getMC2() . "?";
}

echo getMC2() . PHP_EOL;
echo getMC2bis("Albert Einstein") . PHP_EOL;
echo getUserName("Albert", "Einstein") . PHP_EOL;
echo getFullName("Albert", "Einstein") . PHP_EOL;
echo askUser("bob", "Swagger") . PHP_EOL;
