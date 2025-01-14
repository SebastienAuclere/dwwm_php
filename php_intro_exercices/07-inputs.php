<?php

function stringLength(string $motDePasse): bool
{

    //$chaine = trim($motDePasse); // La fonction trim supprime les espaces avant ou apres la chaine de caractere, 
    $chaine = str_replace(" ", "", $motDePasse); // La fonction str_replace supprime tous les espaces dans $chaine : (" "=chaine a remplacer,""=chaine par laquelle on veux remplacer, $chaine=chaine de caracteres selectionnée). 

    if (strlen($chaine) >= 9) {
        return true;
    } else {
        return false;
    }
}

function passwordCheck(string $chaine): bool
{
    if (stringLength($chaine)) {
        $pattern = '/^(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])(?=.*[\W_]).+$/';
        return preg_match($pattern, $chaine);
    } else {
        return false;
    }
}

$users = [
    "joe" => "Azer1234!",
    "jack" => "Azer-4321",
    "admin" => "1234_Azer"
];

function userLogin(string $username, string $password, array $userTable): bool
{
    foreach ($userTable as $key => $value)
    {
        if ($username !== $key && $password == $value)
        {
            echo "utilisateur non trouvé";
            return false;
        }
        elseif ($username == $key && $password !== $value) 
        { 
            echo "mot de passe invalide";            
            return false;
        }     
        else
        {
            return true;
        }
    }
}


// echo stringLength("turlututu") . PHP_EOL;
// echo stringLength("t    ur       te") . PHP_EOL;
// echo passwordCheck("Exemple1!") . PHP_EOL; // resultat attendu: fonctionne (1)
// echo passwordCheck("exemple1!") . PHP_EOL; // resultat attendu: fonctionne pas ( )
// echo passwordCheck("exemplea!") . PHP_EOL; // resultat attendu: fonctionne pas ( )
// echo passwordCheck("exemple1e") . PHP_EOL; // resultat attendu: fonctionne pas ( )
var_dump(userLogin("joe", "Azer1234!", $users));
var_dump(userLogin("jack", "Azer-4321", $users));
var_dump(userLogin("admin", "1234_Azer", $users));
var_dump(userLogin("joe", "Azer1234", $users));
var_dump(userLogin("jo", "Azer1234!", $users));
var_dump(userLogin("joe", "Aer1234!", $users));
var_dump(userLogin("joe", "Azer1234!", $uses));

